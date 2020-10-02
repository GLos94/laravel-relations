<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'EmployeeController@index') -> name('emp.index');

Route::get('/emp/create', 'EmployeeController@create') -> name('emp.create');
Route::post('/emp/store', 'EmployeeController@store') -> name('emp.store');

Route::get('/emp/{id}', 'EmployeeController@show') -> name('emp.show');
