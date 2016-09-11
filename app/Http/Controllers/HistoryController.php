<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HistoryController extends Controller {

    /**
     * HistoryController constructor.
     */
    public function __construct()
    {

    }

    public function index() {
       return view('parts.history');
    }


}
