<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // use HasFactory;
    // protected $table = 'users';
    

    // protected $primarykey = 'user_id';


    public $timestamps = false;
    protected $primarykey = 'id';
}
