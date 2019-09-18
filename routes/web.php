<?php

Route::get('/', function () {
    return view('Home');
});

Route::get('/locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

