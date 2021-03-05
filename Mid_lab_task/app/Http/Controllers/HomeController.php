<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('home.index');

        // if($req->session()->has('username')){
        //     return view('home.index', compact('id', 'name'));
        // }
        // else{
        //     $req->session()->flash('msg', 'Invalid requset ...login first');
        //     return redirect('/login');
        // }
    }

    function manage_customer(){
        return view('home.manage_customer');
    }

    function manage_vendors(){
        return view('home.manage_vendors');
    }

    function others_company_stuffs(){
        return view('home.others_company_stuffs');
    }

    function static_contents(){
        return view('home.static_contents');
    }

    function add_manage(){
        return view('home.add_manage');
    }
}
