<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class StatusController extends Controller
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
        $selectmenu = "status";
        return view('status', compact('selectmenu'));
    }

    public function getTrendData()
    {
        /* $data = new array;
        for($i = 0; $i < 3000; $i++)
        {

        } */
    }
}
