<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MoneyLog;
use App\News;
use App\Transaction;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    private $percent = [
        1 => 4,
        2 => 3,
        3 => 1,
        4 => 1,
        5 => 1,
        6 => 0.5,
        7 => 0.5,
        8 => 0.5
    ];

    public function index()
    {
        $user = Auth::user();
        return view('admin.content.main', compact('user'));
    }

    public function getUsersPage(Request $request)
    {
        return view('admin.content.users', compact('users'));
    }

    public function getIncomePage(Request $request)
    {
        return view('admin.content.income_h');
    }

    public function getIncome()
    {
        return Transaction::where('status', Transaction::STATUS_ACCEPTED)->get();
    }

    public function getUsersAll(Request $request)
    {
        if (!$request->ajax()) {
            abort(400);
        }

        return User::all();
    }

    public function indexNews()
    {
        return view('admin.content.news');
    }

    public function addNews(Request $request)
    {
        $news = new News();
        $news->fill($request->all());
        if ($request->input('for_auth', false))
            $news->type = News::AUTH_NEWS;
        else
            $news->type = News::ALL_NEWS;
        $news->save();
        return redirect()->back();
    }

    public function getSharesRequests(Request $request)
    {
        return Transaction::getNotApprovalRequests();
    }

    public function deleteSharesRequests(Request $request, $ids)
    {
        if (!$request->ajax()) {
            abort(400);
        }

        Transaction::deleteTransaction(explode(',', $ids));

        return [];
    }

    public function approveSharesRequests(Request $request, $ids)
    {
        if (!$request->ajax()) {
            abort(400);
        }

        $ids = explode(',', $ids);

        try {

            $result = 0;
            DB::beginTransaction();

            foreach ($ids as $id) {
                $transact = Transaction::find($id);
                $userMakeRequest = $transact->user;
                $this->payPartnersMoney($userMakeRequest, $transact->amount * 5000, 0, $userMakeRequest);
            }

            $result = Transaction::whereIn('id', $ids)
                ->update([
                    'status' => Transaction::STATUS_ACCEPTED
                ]);

            DB::commit();
            return $result;
        } catch (QueryException $e) {
            DB::rollback();
            return false;
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }


    private function payPartnersMoney($user, $money, $count, $user_made)
    {
        if ($count == 0) {
            $count = 1;
        }
        //Заканчиваем как отработал 8
        if ($count == 9) {
            return;
        }
        if ($user->parent) {
            $currentWorkingUser = $user->parent;
            $userGet = +$money * +$this->percent[$count] / +100;
            $currentWorkingUser->increment('a_money', $userGet);
            $currentWorkingUser->save();
            $this->writeLog($user_made, $currentWorkingUser, $this->percent[$count], $money);
            $count++;
            $this->payPartnersMoney($currentWorkingUser, $money, $count, $user_made);
        }

    }


    private function writeLog($user_made, $user_got_money, $percent, $money)
    {
        $log = new MoneyLog();
        $got = $money * $percent / 100;
        $log->fill([
            'user_made' => $user_made->id,
            'user_got_money' => $user_got_money->id,
            'percent' => $percent,
            'sum' => $money,
            'money_got' => $got
        ]);

        $log->save();
    }


    public function payDividends(Request $request)
    {
        $percent = (float)$request->get('percent');

        if ($percent <= 0 || $percent > 1) {
            return response("", 500);
        }

        $users = User::where('id', '<>', Auth::user()->id)->get();
        foreach ($users as $user) {
            $sum_amount = Transaction::selectRaw('sum(amount) as sum')
                ->where('user_id', $user->id)
                ->where('status', Transaction::STATUS_ACCEPTED)
                ->first()->sum;
            $sum = $sum_amount * 5000;
            $dividend = $sum * $percent;
            $user->increment('dividends', $dividend);
            $user->save();
        }
    }


}
