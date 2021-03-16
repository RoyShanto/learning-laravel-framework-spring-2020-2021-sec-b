<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    public function index(){
        return view('channel.index');
    }

    public function physical_store(Request $req){

        $t = NOW();
        $t_date = $t->toDateString();

        $dt = NOW()->subDays(7);
        $b_date = $dt->toDateString();
        // echo $t_date; echo '<br>';
        // echo $b_date;

        $data_for_today = DB::table('physical_store_channel')
        ->where('status', 'sold')
        ->where('date_sold','<=', $t_date) //*****
        ->get();
        $data1 = count($data_for_today);
        // echo $data1;
        //----------------------
        $data_for_week = DB::table('physical_store_channel')
        ->where('status', 'sold')
        ->where('date_sold','<=', $b_date) //*****
        ->get();
        $data2 = count($data_for_week);
        // echo $data2;
        return view('channel.physical_store', ['users' => $data_for_today, 'td' => $data1, 'wd' => $data2]);
    }

    public function social_media(){
        // $data = DB::table('social_media_channel')->get();
        // echo $data;
        // foreach($data as $d){
        //     echo $d->id;

        // }
        //return view('channel.social_media');
        $t = NOW();
        $t_date = $t->toDateString();

        $dt = NOW()->subDays(7);
        $b_date = $dt->toDateString();
        // echo $t_date; echo '<br>';
        // echo $b_date;

        $data_for_today = DB::table('social_media_channel')
        ->where('status', 'sold')
        ->where('date_sold','<=', $t_date) //*****
        ->get();
        $data1 = count($data_for_today);
        // echo $data1;
        //----------------------
        $data_for_week = DB::table('social_media_channel')
        ->where('status', 'sold')
        ->where('date_sold','<=', $b_date) //*****
        ->get();
        $data2 = count($data_for_week);
        // echo $data2;
        return view('channel.social_media', ['users' => $data_for_today, 'td' => $data1, 'wd' => $data2]);

    }

    public function ecommerce(){
        $t = NOW();
        $t_date = $t->toDateString();

        $dt = NOW()->subDays(7);
        $b_date = $dt->toDateString();
        // echo $t_date; echo '<br>';
        // echo $b_date;

        $data_for_today = DB::table('ecommerce_channel')
        ->where('status', 'sold')
        ->where('date_sold','<=', $t_date) //*****
        ->get();
        $data1 = count($data_for_today);
        // echo $data1;
        //----------------------
        $data_for_week = DB::table('ecommerce_channel')
        ->where('status', 'sold')
        ->where('date_sold','<=', $b_date) //*****
        ->get();
        $data2 = count($data_for_week);
        // echo $data2;
        return view('channel.ecommerce', ['users' => $data_for_today, 'td' => $data1, 'wd' => $data2]);

        // return view('channel.ecommerce');
    }
}
