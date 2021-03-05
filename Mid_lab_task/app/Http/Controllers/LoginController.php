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
        
        $rules = [
                        'email' => 'required|email|max:49',
                        'password' => 'required|min:8|max:20|regex:/^[\w-]*$/'
                    ];
                    $this->validate($req, $rules);
                    // echo $req->email;
                    // echo $req->password;
                    return redirect('/home');
    }
        
    //     if($req->email == '' || $req->password == ''){
    //         echo "Null Submition";

    //     //     $req->session()->flash('msg', 'null username and password..');
    //     //     return redirect('/login');
    //     }
    //     elseif($req->email == $req->password){

            
    //         // echo $req->username;
    //         // echo $req->password;
    //         // $req->session()->put('username', $req->username); 

            
    //         $rules = [
    //             'email' => 'required|email',
    //             'password' => 'required|min:5'
    //         ];
    //         $this->validate($req, $rules);
            
    //         return redirect('/home');

            

    //         // $type = user_type::all();
    //         // print_r($type);
    //     }
    //     else{
    //         echo "invalid user";
    //         return redirect('/login');
    //         // $req->session()->flash('msg', 'Invalid username and password...');
    //         // return redirect('/login');
    //     }
        

    // }

    
}
