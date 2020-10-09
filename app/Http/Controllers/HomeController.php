<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user()->profile->date_of_birth;
        if ($user != "") {
            return view('home');
        } else {
            return redirect('/player/profile/' . auth()->user()->id);
        }
    }

    public function handleAdmin()
    {
        return view('admin.adminHome');
    }
}
