<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;

class AjaxController extends Controller
{


    /**
     * AjaxController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getParts()
    {
        $all = Config::get('constants.PARTS_LIMIT');
        $cost = Config::get('constants.PART_COST');
        $used = Transaction::calculateRestShares();
        $rest = $all - $used;
        return [
            'cost' => $cost,
            'used' => $used,
            'rest' => $rest
        ];

    }
}
