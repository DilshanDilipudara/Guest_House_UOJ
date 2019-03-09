<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user=Auth::user();
        return view('profile',compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('editprofile',compact('user'));
        
    }
    public function update(Request $request,$id)
    {
       $user = User::find($id);
       $user->Uname=$request->Uname;
       $user->Empno=$request->Empno;
       $user->Email=$request->Email;
       $user->gender=$request->gender;
       $user->faculty=$request->faculty;
       $user->Nicno=$request->Nicno;
       $user->Department=$request->Department;
       $user->Position=$request->Position;
       $user->Pno=$request->Pno;
       $user->update();
       
        
    }

   public function checkdate(Request $request){

        $datein=$request->input('startdate');
       
        $dateend=$request->input('enddate');


      $q=DB::table('rooms')
            ->select('Roomid')
            ->get();

            

        $a=DB::table('bookinginfos')
            ->where('Strd','<=',$datein)
            ->where('Endd','>=',$dateend)
            ->orwhereDate('Endd', '>=', $datein)
            -> whereDate('Endd', '<=', $dateend)
            -> orwhereDate('Strd', '>=', $datein)
            -> whereDate('Strd', '<=', $dateend)
            ->where('isbooked','=',true)
            ->select('Roomid')
            ->get();


     
        $length1 = count($q);
        $length2 = count($a);
        $count = 0;
        
        foreach($q as $s)
        {
            foreach($a as $m)
            {
               $count ++;
                if(($m->Roomid) == ($s->Roomid))
                {
                    
                    break;
                }
               if($length2==$count){
                
                $b[] =$s->Roomid;
               
               }  
            }
            $count = 0;
            
        }
        return view('notbook',compact('b'));
   }



}
