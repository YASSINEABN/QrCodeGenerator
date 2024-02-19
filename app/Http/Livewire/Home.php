<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;


class Home extends Component
{
public $name;
public $email;
public $password;
public $msg=null;


protected $rules=[
    'name' => 'required|String|max:10',
    'email' => 'required|String|email|unique:users,email',
    'password' => 'required|min:7'
    
];
    public function render()
    {
        return view('livewire.home')->with('message',$this->msg);
    }
    public function store(){
      $ok =  $this->validate();
        $message=null;
        $test = new User();
        $test->name=$this->name;
        $test->email = $this->email;
        $test->password = $this->password;
        $test->save();
        
        if($test){
        $this->msg="go verified ur acc in ur email";
        $this->name="";
        $this->email = "";
        $this->password = "";
      
    }

}
 
}

