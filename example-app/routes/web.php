<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/my-controller',[MyController::class, 'index']);
Route::get('/my-controller2','App\Http\Controllers\MyController@index');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('my-controller3', 'MyController@index');
});

Route::resource('/my-controller4', MyController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function(){
    return view('myroute');
});

Route::post('/my-route',function(Request $req){
    $data['MultiNum'] = $req -> input('MultiNum');
    return view('myfolder.mypage',$data);
});

Route::post('/my-page', function(Request $req) {
    $req->validate([
        'back' => 'required|string',
    ]);
    $data['back'] = $req->input('back');
    return view('back', $data);
});
