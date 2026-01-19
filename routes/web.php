<?php

/*
 * Project Name: livewire-course
 * File: web.php
 * Created Date: Monday January 19th 2026
 * 
 * Author: Nova Ardiansyah admin@novaardiansyah.id
 * Website: https://novaardiansyah.id
 * MIT License: https://github.com/novaardiansyah/livewire-course/blob/main/LICENSE
 * 
 * Copyright (c) 2026 Nova Ardiansyah, Org
 */

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect()->route('users');
});

Route::get('/users', function () {
  return view('users', [
    'title' => 'Users'
  ]);
})->name('users');
