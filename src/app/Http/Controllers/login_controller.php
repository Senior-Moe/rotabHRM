<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    //show the page
    public function get_login_page(){
        return veiw('login');
    }

    public function check_login_page(Request $request){
       $validate = $request->validate([
           'email'=> 'required' ,
           'password' => 'required'
       ]);
    }

    public function get_register_page(){
        return veiw('register');
    }
}
