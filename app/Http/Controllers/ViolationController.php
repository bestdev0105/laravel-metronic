<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViolationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectmenu = "potential_violation";
        return view('violation', compact('selectmenu'));
    }

    public function index2()
    {
        $selectmenu = "potential_violation";
        return view('violation2', compact('selectmenu'));
    }
}
