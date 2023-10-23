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
        if(auth()->user()->is_admin == 0) {
            return redirect('home');
        }
        else if(auth()->user()->is_admin == 1) {
            return redirect('admin/home');
        }
        else if(auth()->user()->is_admin == 2) {
            return redirect('creator/home');
        }
        
        else {
            return redirect('login');
        }
    }
    public function afficheprofilvisiteur(){
        if(auth()->user()->is_admin == 0) {
            return redirect('home');
        }
        else if(auth()->user()->is_admin == 1) {
            return redirect('admin/home');
        }
        else if(auth()->user()->is_admin == 2) {
            return redirect('creator/home');
        }
        
        else {
            return redirect('login');
        }
    }
}
