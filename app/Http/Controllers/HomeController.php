<?php

namespace App\Http\Controllers;
use App\Advertisement;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $ads = Advertisement::whereNotIn('user_id',[$user_id])->get();
       return view('home',compact('ads'));
    }
}
