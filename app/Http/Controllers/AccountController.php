<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $consts = Config::get('constants');
        $user = Auth::user();
        $transactions = $user->transactions;
        return view('parts.account', compact('user', 'consts', 'transactions'));
    }

    public function buyShares(Request $request) {
        $amount = (int) $request->get('amount');

        if ($amount <= 0) {
            return redirect()->back();
        }

        $used = Transaction::calculateRestShares();
        $all = Config::get('constants.PARTS_LIMIT');
        $rest = $all - $used;

        if ($amount > $rest) {
            abort(400);
        }

        $transact = new Transaction();
        $transact->amount = $amount;
        $transact->user_id = Auth::user()->id;
        $transact->status = Transaction::STATUS_PROCESSING;
        $transact->save();

        return redirect()->back();
    }

}
