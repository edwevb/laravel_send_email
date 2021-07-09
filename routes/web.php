<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return response()->json([
    	'message' => "Made by Edward Evbert Angkouw",
    	'purpose' => "Processing contact form email",
    	'url'			=> "https://edwardevbert.netlify.app/"
    ]);
});
