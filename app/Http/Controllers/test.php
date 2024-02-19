<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class test extends Controller
{
   public $cmp=false;
   
    //
    public function login(Request $request){
        //  $request->validate(['email1' => 'required|String|email','password1' => 'required|String']);
        $user = User::where('email','=',$request->input('email1'))->first()
        && User::where('password','=',$request->input('password1'))->first();
       if($user){
        $this->cmp=true;
       return redirect()->back()->with('success', 'ur account is succesfully registred !!');
       }
       return redirect()->back()->with('err', 'u have an error: ur email or password is wrong!!');    
}
public function direct(){
return view('welcome2')->with('cmp',$this->cmp);
}
// public function store(Request $request){
// $file=$request->img;
// if(!empty($file))
// move_uploaded_file($file,public_path('qrcodes/qrcode.png'));

// }
}
