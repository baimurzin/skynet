<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MoneyLog;
use App\Transaction;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    /**
     * HistoryController constructor.
     */
    public function __construct()
    {

    }

    public function index()
    {
        return view('parts.history');
    }

    public function getUserInvoices()
    {
        return MoneyLog::getUserInvoices();
    }

    public function getUserTransacts()
    {
        return Transaction::getUserTransacts();
    }

    public function getUserWithdraw()
    {

    }

}
