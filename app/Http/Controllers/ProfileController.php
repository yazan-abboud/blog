<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $userss = User::where('id',$id)->first();
        $user = $userss->profile;
        return view('profile.index',compact('user'));

    }

    public function store(Request $request,$id)
    {
        $request->validate([
            "phone" => 'required|numeric',
            "address" => 'required',
            "country" => 'required',
            "city" => 'required',
        ]);

        Profile::updateorcreate(['user_id'=>$id],[
            "phone"=> $request->phone,
            "address"=> $request->address,
            "country"=> $request->country,
            "city"=> $request->city,
            "user_id" => $id
        ]);
        return view('index');
    }
}
