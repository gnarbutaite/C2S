<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
class UserController extends Controller
{
    //
    public function profile(){
        $user = Auth::user();
        $ads = $user->advertisements;
        return view('profile', compact('user','ads') );
    }
    public function update_avatar(Request $request){
        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        $user = Auth::user();
        $ads = $user->advertisements;
        //print_r($ads);

        return view('profile', compact('user','ads') );
    }
}