<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\bookinginfo;
use App\user;
use App\aaa;
use Auth;

use DB;
 
class front extends Controller
{
            public function managewaiting(){

                $data=   DB::table('bookinginfos')
                ->select('users.Uname','bookinginfos.Jtype','bookinginfos.Roomid',
                        'bookinginfos.Strd','bookinginfos.Endd','bookinginfos.Empno')
                ->join('users','users.Empno','=','bookinginfos.Empno')
                ->where('Cleval',!3)
                ->get();

                //$data = DB::table('bookinginfos')->where('Cleval',!3)->get();

                //$data = bookinginfo::table('Empno')->get();
            Return view('adminIndex',['user'=>$data]);
        }





        public function store(Request $request )
        {
            
            //dd($request->all());
        $name=$request->input('/payment');
        $data=   DB::table('bookinginfos')
            ->select('users.Uname',
                    'bookinginfos.Empno','users.Abill')
            ->join('users','users.Empno','=','bookinginfos.Empno')
            ->where('Empno',!3)
            ->get();
        
        }

        public function confirmrequest(){

            $data=   DB::table('bookinginfos')
            ->select('users.Uname','bookinginfos.Jtype','bookinginfos.Roomid',
                    'bookinginfos.Strd','bookinginfos.Endd','bookinginfos.Empno')
            ->join('users','users.Empno','=','bookinginfos.Empno')
            ->where('Cleval',!3)
            ->get();

    
        Return view('adminIndex',['user'=>$data]);
        }

        public function doconfirm($Empno){
            //echo("$Empno");
            DB::table('bookinginfos')
                    ->where('Empno', $Empno )
                    ->update(['Cleval' => 3]);
                    return redirect()->back();
        
        }

        public function payment(Request $request){
            $amount=$request->input('/payinfo');
            $name=Auth::user()->Empno;
            $now=Auth::user()->Abill;

            DB::table('users')
                    ->where('Empno', $name )
                    ->update(['Abill' =>$now-$amount]);
                    return redirect()->back();

        
        Return view('payments',['user'=>$data]);


        }

        public function confirmuser(){

            $data=   DB::table('users')
            ->select('users.Empno','users.Uname','users.gender',
                    'users.faculty','users.Department','users.Position')
            ->where('Crts',0)
            ->get();

            
        Return view('adduser',['user'=>$data]);
        }

        public function douserconfirm($Empno){
            //echo("$Empno");
            DB::table('users')
                    ->where('Empno', $Empno )
                    ->update(['Crts' => 1]);
                    return redirect()->back();
        //dd($data->all());
        }

 
   
}


