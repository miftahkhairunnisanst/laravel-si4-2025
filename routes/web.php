<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()  {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['Miftah','Imu','Taehyung','Jungkook'];
    $jumlah = count($npm);
    
    return view('mahasiswa',compact('npm','jumlah','nama'));
});

Route::get('/profile', function () {
    $nama = 'Miftah Khairunnisa Nasution';
    //return view('profile' , compact ('nama'));
    return view('profile')->with('nama', $nama);
});

