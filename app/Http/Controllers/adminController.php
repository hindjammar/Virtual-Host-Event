<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index(){
        $d = User::get();
        return view('admin-home' , compact('d'));
    }

    public function editU($id){
        $data=User::where('id','=',$id)->first();
        return view('editUser',compact('data'));
    }


    public function save(Request $request){
        // $request->validate([
        //    'name'=>'required',
        //     'email'=>'required',
        //   'password'=>'required',
        //    'is_admin'=>'required'
        // ]);
       
        // User::create($request->all());
        $name = $request->name;
        $email = $request->password;
        $is_admin = $request->is_admin;
        $password = $request->password;


      $u= new User;
      $u->name=$name;
      $u->email=$email;
       $u->password=$password;
       $u->is_admin=$is_admin;
       $u->save();


        return redirect()->back()->with('success', 'User Add Successfully');

    }


    public function updateU(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'is_admin'=>'required',
            'password'=>'required'
        ]);
        
        $res = User::where('id','=',$request->id)->update([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'is_admin'=>$request->is_admin,
            'password'=>bcrypt($request->password),
        ]);

        if($res)
            return redirect()->back()->with('success' , 'Users Update Successfully');
        else
            return redirect()->back()->with('error', 'Could not update user');
    }

    public function aff(){
        return view('useradmin');
    }
}
