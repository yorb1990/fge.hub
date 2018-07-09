<?php
use Illuminate\Http\Request;
Route::get('/hub', function () {
    return view("fge_tok-hub::hub");
});
Route::get('/hubc1', function () {
    return view("fge_tok-hub::client1");
});
Route::get('/hubc2', function () {
    return view("fge_tok-hub::client2");
});