<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
// use App\Admin;

class loginController extends Controller
{
    function index(){
        return view('login.index');
    }

    function verify(Request $req){
        $rules = [
            'email' => 'required|email|max:49',
            'password' => 'required|min:8|max:20|alpha_num'];
            
            $this->validate($req, $rules);

        $user = Login::where('email', $req->email)
                    ->where('password', $req->password)
                    ->get();

                    // print_r($user);
                    foreach($user as $us)
                    {
                        // $username = $us->user_name;
                        $username = $us->username;
                        $user_type = $us->type;
                    }
                
                    // print_r(count($user));

        if(count($user) > 0){
            
            // if($user_type == 'admin')

            $req->session()->put('username', $username);  
            $req->session()->put('user_type', $user_type);  

                // echo $req->session()->get('username');
                // echo $req->session()->get('user_type');

                return redirect('/home');
                // return Admin::all();
        }
        else{
            $req->session()->flash('msg', 'invalide user..!');
            return redirect('\login');
        }
        
                 
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
