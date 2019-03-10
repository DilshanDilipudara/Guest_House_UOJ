<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
    public function bookThisRoom(){
        $data = DB::table('bookinginfos')->insert([
            

        ]);

        return redirect()->back()->withSuccess('IT WORKS!');

    }


 
}
