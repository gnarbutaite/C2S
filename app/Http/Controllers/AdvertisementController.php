<?php

namespace App\Http\Controllers;
use Auth;
use App\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function create(){
        return view('createAd');
    }

    public function store(Request $request){

        $ad = new Advertisement();
        $ad -> user_id = Auth::user() -> id;
        $ad -> title = $request -> title;
        $ad -> description = $request -> description;
        $ad -> subject = $request -> subject;
        $ad -> price = $request -> price;
        $ad -> save();

        return redirect('/profile');
    }

}
