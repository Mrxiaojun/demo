<?php

Route::get('/', function () {
	    return view('welcome');
});
Route::get('/about', function () {
	    return 'about us';
});
