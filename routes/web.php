<?php

use Illuminate\Support\Facades\Route;

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


//Creare un sito web:
//0 Homepage
//0 Pagina 1
//0 Pagina 2.
// Le 3 pagine devono essere collegate tra loro tramite links 

// homepage
Route::get('/homepage',function (){
    return view('homepage');
});
// page1
Route::get('/page1',function (){
    $giochi = [
    ["name" => "ratchet and clank", "year"=> 2023, "description"=> "agvzzz", "img"=> ""],
    ["name" => "lego star wars", "year"=> 2023, "description"=> "agvzzz", "img"=> ""],
    ["name" => "dragonball", "year"=> 2023, "description"=> "agvzzz", "img"=> ""],
    ["name" => "need for speed", "year"=> 2023, "description"=> "agvzzz", "img"=> ""],
    ["name" => "league of legends", "year"=> 2023, "description"=> "agvzzz", "img"=> ""],
    ["name" => "super mario", "year"=> 2023, "description"=> "agvzzz", "img"=> ""],
    ["name" => "pokemon", "year"=> 2023, "description"=> "agvzzz", "img"=> ""],
    ];
    return view('page1',['giochi'=>$giochi]);
});
// page2
Route::get('/page2',function (){
    return view('page2', ['giochi'=>$page1]);
});