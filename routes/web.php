<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Corrected route with parameter constraints
Route::get('/user/{id}/{name?}', function (string $id, string $name = null) {
    // return 'User Page - ID: ' . $id . ' User Name: ' . $name;
    return view('user', ['id' => $id, 'name' => $name]);
})
->whereNumber('id')       // `whereNumber` expects the parameter name as string (corrected)
->whereAlpha('name');     // `whereAlpha` expects parameter name as string

// Home controller route
Route::get('/home', [UserController::class, 'index']);

// Redirect /home to /user/1019 (needs name if name is constrained? If not, it's okay)
Route::redirect('/home', '/user/1019');

// Greeting routes grouped with prefix and proper syntax
Route::prefix('greeting')->group(function () {
    Route::get('/about', function () {
        return 'Greeting Page - about';
    })->name('gt');

    Route::get('/name', function () {
        return 'Greeting Page - name';
    })->name('gtn');

    Route::get('/address', function () {
        return 'Greeting Page - address';
    })->name('gta');
});

// template inheritance where master use in every template and feature are change by rules
Route::view('/master','master');
Route::view('/feature1', 'feature1');
Route::view('/feature2', 'feature2');
Route::view('/feature3', 'feature3');

Route::get('student',[StudentController::class, 'index']);

// Route::resource('Student', ResourceController::class);


