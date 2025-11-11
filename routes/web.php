<?php

use App\Http\Controllers\Levelcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/level',[Levelcontroller::class,'index']);