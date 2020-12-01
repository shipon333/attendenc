<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class AdduserController extends Controller
{
    public function addUser(){
        return view('backend/addusers/add-user');
    }
    public function listUser(){
        $users = User::All();
        return view('backend/addusers/list-datatable',compact('users'));
    }
    public function storeUser(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'mobile' => 'required|unique:users',
            'roll' => 'required',
            'name' => 'required',
        ]);
        $insert_user = new User();
        $otp = rand(0000, 9999);
        $insert_user->usertype = 'Admin';
        $insert_user->roll = $request->roll;
        $insert_user->name = $request->name;
        $insert_user->mobile = $request->mobile;
        $insert_user->email = $request->email;
        $insert_user->password = bcrypt($otp);
        $insert_user->otp = $otp;
        if($insert_user->save()){
            return redirect()->route('list.user')->with('success','User Insert Successful');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
        

    }
    public function editUser($id){
        $editData = User::findorfail($id);
        return view('backend/addusers/add-user',compact('editData'));
    }
    public function updateUser(UserRequest $request, $id){
        $updateuser = User::findorfail($id);
        // $validatedData = $request->validate([
        //     'email' => 'required|unique:users',
        //     'mobile' => 'required|unique:users',
        // ]);
        $updateuser->roll = $request->roll;
        $updateuser->name = $request->name;
        $updateuser->mobile = $request->mobile;
        $updateuser->email = $request->email;
        if($updateuser->save()){
            return redirect()->route('list.user')->with('success','User Update Successful');
        }else{
            return redirect()->back()->with('error','Something Error');
        }

    }
    public function deleteUser(Request $request){
        $deleteuser = User::findorfail($request->id);
        if(file_exists('public/upload/users/'.$deleteuser->avatar) AND !empty($deleteuser->avatar)){
            unlink('public/upload/users/'.$deleteuser->avatar);
        }
        $deleteuser->delete();
        return redirect()->route('list.user')->with('success','Data delete successful');

    }
}
