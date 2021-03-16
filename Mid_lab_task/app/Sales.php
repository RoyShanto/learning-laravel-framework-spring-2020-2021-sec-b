<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'physical_store_channel';


    protected $primarykey = 'id';


    public $timestamps = false;
}
