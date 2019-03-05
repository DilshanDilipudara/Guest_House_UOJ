<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){

        Mail::send(['text'=>'send'],['name'=>'gunawardhanaudara'],function($message){

            $message->to('dilshandilip6@gmail.com','To Dilshan')->subject('Test Email');
            $message->to('sahand.herath@gmail.com','To Dilshan')->subject('Test Email');
           
            $message->from('gunawardhanaudara@gmail.com','gunawardhana');
        });

    }
}
