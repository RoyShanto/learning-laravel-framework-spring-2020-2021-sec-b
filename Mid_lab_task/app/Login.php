<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'users';
    

    protected $primarykey = 'user_id';


    public $timestamps = false;
    // const CREATED_AT = null;
    // const UPDATED_AT = null;

}
