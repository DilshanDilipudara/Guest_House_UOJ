<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GetAvailableRooms extends Controller
{
 
    public function getAllRooms(){
       
        $data=   DB::table('rooms')
        ->select('rooms.roomID','rooms.status','rooms.description','rooms.price')
        // ->join('users','users.Empno','=','bookinginfos.Empno')
        // ->where('Cleval',!3)
        ->get();

       return view('rooms')->with('rooms',$data);


    }
}
