<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests= Test::all();

        dd($tests);
        
        // return view ('coba.index',compact(['tests']));
    }
}