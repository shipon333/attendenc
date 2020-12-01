<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;

class profileController extends Controller
{
    public function profileView(){
        return view("backend/profiles/profile");
    }
    public function profileUpdate(UserRequest $request, $id){
        $updateprofile = User::findorfail($id);
        // dd($updateprofile->toArray());
        $nmb = rand(0000, 9999);
        $updateprofile->name = $request->name;
        $updateprofile->mobile = $request->mobile;
        $updateprofile->email = $request->email;
        $updateprofile->address = $request->address;
        $updateprofile->desination = $request->desination;
        $updateprofile->gender = $request->gender;
        $updateprofile->religion = $request->religion;
        if ($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('YmdHi').$nmb.$file->getClientOriginalName();
            $file->move(public_path('upload/users'), $filename);
            $updateprofile['avatar']=$filename;
        }
        if($updateprofile->save()){
            return redirect()->route('profile.view')->with('success','User Update Successful');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }
    public function ChangePass(){
        return view("backend/profiles/change-password");
    }
    public function PassStore(Request $request){
        if (Auth::attempt(['id'=>Auth::user()->id, 'password'=>$request->curentPass])) {
            $updatepass = User::find(Auth::User()->id);
            $updatepass->password = bcrypt($request->newPass);
            $updatepass->save();
             return redirect()->route('profile.view')->with('success','Password Update successful');
         }
         else{
               return redirect()->back()->with('error','Sorry Old Password dos not match!');
         }  
    }
    
}
