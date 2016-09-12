<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Transaction;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                $this->payPartnersMoney($userMakeRequest, $transact->amount * 5000, 0);
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

    public function getUsersPage(Request $request)
    {

//        $users = User::all();
        return view('admin.content.users', compact('users'));
    }

    public function getUsersAll(Request $request) {
        return User::all();
    }

    private function payPartnersMoney($user, $money, $count)
    {
        if ($count == 0) {
            $count = 1;
        }
        if ($user->parent) {
            $currentWorkingUser = $user->parent;
            $userGet = +$money * +$this->percent[$count] / +100;
            $currentWorkingUser->increment('a_money', $userGet);
            $currentWorkingUser->save();
            $count++;
            $this->payPartnersMoney($currentWorkingUser, $money, $count);
        }
        //Заканчиваем как отработал 8
        if ($count == 8) {
            return;
        }
    }


}
