<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Sergey',
        'age' => 15,
        'position' => 'Center',
        'address' => 'Ekaterinburg'
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Ekaterinburg',
        'post_code' => '777',
        'email' => '12345@mail.ru',
        'email' => '',
        'phone' => '0123456789'
    ]);
});
