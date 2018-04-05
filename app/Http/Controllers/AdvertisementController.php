<?php

namespace App\Http\Controllers;
use Auth;
use App\Advertisement;
use App\Chat;
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

    public function show($ad_id){

        $ad = Advertisement::where('id',$ad_id)->first();
        return view('updateAd',compact('ad'));


    }

    public function update(Request $request){

        Advertisement::where('id', $request->ad_id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'subject' => $request->subject,
                'price' => $request->price
                ]);

        return redirect('/profile');

    }

    public function delete(Request $request){

        Advertisement::where('id',$request->ad_id)->delete();
        Chat::where('advertisement_id',$request->ad_id)->delete();
        return redirect('/profile');

    }

}
