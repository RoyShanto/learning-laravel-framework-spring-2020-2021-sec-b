<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('Registration.index');
    }
    public function store_user(Request $req)
    {
        echo "Post request found..!";
    }
}
