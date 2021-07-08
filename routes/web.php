<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return response()->json([
    	'message' => "Made by Edward Evbert Angkouw",
    	'purpose' => "Processing email",
    	'url'			=> "https://edwardevbert.netlify.app/"
    ]);
});
