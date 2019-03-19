<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contai ns the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/rooms', 'HomeController@rooms')->name('rooms');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/rooms', function () {
    $data=   DB::table('rooms')
        ->select('rooms.roomID','rooms.status','rooms.description','rooms.price')
        // ->join('users','users.Empno','=','bookinginfos.Empno')
        // ->where('Cleval',!3)
        ->get();

       return view('rooms')->with('rooms',$data);
});

Route::get('/bookThisRoom', 'BookingController@bookThisRoom');


Route::get('/showAdminPanel', function(){
        return view('waitinglist');
});

Route::get('/profile', 'UserController@profile');
Route::get('/editprofile{id}','UserController@edit');
Route::put('/update{id}','UserController@update');
Route::get('/waitinglist','front@managewaiting');


//Jinta
Route::get('/waitinglist','front@managewaiting');
Route::get('/confirm', function () {
    return view('confirmreq');
});

Route::get('/confirm/{Empno}','front@doconfirm');
Route::get('/douserconfirm/{Empno}','front@douserconfirm');

//Route::post('/payinfo','front@payment');

Route::get('/paymentinfo','front@paymentinfo');
//Route::get('/paybillinfo/{Empno}','front@paybillinfo');
Route::post('/dopay','front@dopay');


 Route::post('/date','UserController@checkdate');
 Route::get('/index','UserController@checkdate');


 //Admin Panel Routes
 Route::get('/adminIndex', function () {
    return view('adminIndex');
});

Route::get('/managerooms', function () {
    return view('manageroom');
});

Route::get('/confirmuser','front@confirmuser');
Route::get('/confirmlist','front@confirmrequest');

Route::get('send','mailController@send');


Route::get('/pdf',function(){
   return view('pdf');
});