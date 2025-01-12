<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data = [
    		'sliderArticles' => Article::hasImage()->take(4)->get(),
            'articles' => Article::all()
    	];
        return view('home', $data);
    }
}
