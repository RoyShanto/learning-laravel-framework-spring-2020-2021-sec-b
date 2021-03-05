<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\user_type;

class loginController extends Controller
{
    function index(){
        return view('login.index');
    }

    function verify(Request $req){
        if($req->email == '' || $req->password == ''){
            echo "Null Submition";

        //     $req->session()->flash('msg', 'null username and password..');
        //     return redirect('/login');
        }
        elseif($req->email == $req->password){

            
            // echo $req->username;
            // echo $req->password;

            // $req->session()->put('username', $req->username); 
            return redirect('/home');

            

            // $type = user_type::all();
            // print_r($type);
        }
        else{
            echo "invalid user";
            return redirect('/login');
            // $req->session()->flash('msg', 'Invalid username and password...');
            // return redirect('/login');
        }
        

    }

    
}
