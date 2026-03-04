<?php

use Inertia\Inertia;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function(){
    return Inertia::render('Test/Test');
});