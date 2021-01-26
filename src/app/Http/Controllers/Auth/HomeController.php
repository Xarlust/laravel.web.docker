<?php


namespace App\Http\Controllers\Auth;


class HomeController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public  function index(){
        return view('home');
    }
}
