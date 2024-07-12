<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    $users = User::all();
    echo $users;
});

Route::get('/user/name', function () {
    $users = User::all();
    foreach ($users as $user) {
        echo '<br>';
        echo $user->name;
    }
});
