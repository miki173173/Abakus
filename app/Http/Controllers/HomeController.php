<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use DB;

class HomeController extends Controller
{
    public function usertotal()
    {
        $user = Auth::user();
        $userselect = DB::table('users')
        ->get();
        return view('password.user',compact('user',$user,'userselect'));
    }
    public function logscreen()
    {
        $user = Auth::user();
        return view('password.logscreen',compact('user',$user));
    }

    public function userUpdate( Request $request)
    {
        $userUpdate = [
            'id' 		    =>	$request->idUpdate,
            'name' 	        =>	$request->name,
            'email' 	    =>	$request->email,
            'department' 	=>	$request->department,
            'division'      =>	$request->division,
            'role_name'     =>	$request->roleName
        ];
        // return dd($userUpdate);
        DB::table('users')->where('id',$request->idUpdate)->update($userUpdate);
        return redirect()->back()->with('userUpdate','.');
    }

    // profile image
    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.index',compact('user',$user));
    }
    // update_avatar

    public function update_avatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();

        $avatar =   $request->file('avatar');
        $avatarName = $user->id.'_soengsouy'.time().'.'.request()->avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('/files/assets/images/' . $avatarName));

        $request->avatar->storeAs('avatar',$avatarName);
        $user->avatar = $avatarName;
        $user->save();

        return back()->with('success','');
    }
}
