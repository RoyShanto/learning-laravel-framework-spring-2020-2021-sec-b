<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use App\Sales;
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
    public function sales_log(){
        return view('channel.sales_log');
    }
    public function store_sales_log(Request $req){
        $rules = [
            'customer_name' => 'required|min:3|max:30|alpha',
            'address' =>'required|min:3|max:50|alpha',
            'phone' => 'required|min:11|max:15',
            'product_id' => 'required',
            'product_name' =>'required',
            'unit_price' => 'required|min:1',
            'quantity' => 'required|min:1|max:20',
            'total_price' => 'required|min:1',
            'date_sold' => 'required',
            'payment_type' => 'required',
            'status' => 'required'
        ];
        $this->validate($req, $rules);

            $user = new Sales();          //Customer is a model name
            $user->customer_name = $req->customer_name;
            $user->address = $req->address;
            $user->phone = $req->phone;
            $user->product_id = $req->product_id;
            $user->product_name = $req->product_name;
            $user->unit_price = $req->unit_price;
            $user->quantity = $req->quantity;
            $user->total_price = $req->total_price;
            $user->date_sold = $req->date_sold;
            $user->payment_type = $req->payment_type;
            $user->status = $req->status;
            $user->save();
            return redirect('/system/sales/physical_store');

            }
        }
    }
// }
