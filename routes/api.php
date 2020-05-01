<?php

use Illuminate\Support\Facades\Route;

Route::get('/tasks', [
        'middleware' => ['nova'],
        'uses' => 'App\Http\Controllers\TasksController@select'
    ]
);
