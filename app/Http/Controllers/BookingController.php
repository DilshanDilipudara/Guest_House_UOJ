<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
    public function bookThisRoom(){
        $data = DB::table('bookinginfos')->insert([
            "Empno"=>"55555",
            "Jtype"=>"KKK",
            "Roomid"=>"215",
            "Strd"=>"2016.02.21",
            "Endd"=>"2016.02.23",
            "Amount"=>150,
            "Cleval"=>0

        ]);

        return redirect()->back()->withSuccess('IT WORKS!');

    }


 
}
