<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Login;
use Illuminate\Support\Facades\DB;
class RegistrationController extends Controller
{
    public function index()
    {
        return view('Registration.index');
    }
    public function store_user(Request $req)
    {

        $rules = [
            'name' => 'required|min:3|max:30|alpha',
            'username' =>'required',
            'email' => 'required|email|min:10|max:50',
            'password' => 'required|min:8|max:20|alpha_num',
            'confirm_password' =>'required|required_with:password|same:password',
            'address' => '',
            'cname' => 'min:3|max:20',
            'phone' => 'required|digits_between:11,15',
            'city' => 'min:3|max:20',
            'country' => 'min:3|max:20'
        ];
        $this->validate($req, $rules);

        // $user = Customer::where('email', $req->email)
        //     ->where('user_name', $req->username)
        //     ->get();
                        //    or
        $user = DB::table('customers')
            ->where('email', $req->email)
            ->where('user_name', $req->username)
            ->get();


        if(count($user) > 0){
            $req->session()->flash('msg', 'User already registerd');
            return redirect('\registration');
        }
        else{

            $user = new Customer();          //Customer is a model name
            $user->full_name = $req->name;
            $user->user_name = $req->username;
            $user->email = $req->email;
            $user->password = $req->password;
            $user->address = $req->address;
            $user->company_name = $req->cname;
            $user->phone = $req->phone;
            $user->city = $req->city;
            $user->country = $req->country;
            $user->user_type = 'active';
            $user->save();

            $user_log = new Login();   //Login is a model name
            $user_log->username = $req->username;
            $user_log->email = $req->email;
            $user_log->password = $req->password;
            $user_log->type = 'active';
            $user_log->save();

            return redirect('/login');
        }

    }
}
