<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function index()
    {
        if (Auth::check())
            $news = News::all();
        else
            $news = News::where('type', '!=', News::AUTH_NEWS)->get();
        return view('parts.news', compact('news'));
    }




}
