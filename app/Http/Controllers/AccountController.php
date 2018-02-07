<?php

namespace App\Http\Controllers;

class AccountController extends Controller
{
    public function create()
    {
    	return view('pages.account.create');
    }

}