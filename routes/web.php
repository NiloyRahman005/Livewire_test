<?php

use App\Livewire\AboutComponent;
use App\Livewire\CreatePost;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-post', CreatePost::class)->name('create.post');
Route::get('/about', AboutComponent::class)->name('about');
