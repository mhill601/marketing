<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inc\Scraper\Testing\Test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test1()
    {
    	$test = new Test();
    	$test->test1();
    }
}
