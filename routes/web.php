<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
})->name('index');


Route::get('users', function () {
    return view('users');
})->name('users');

Route::get('departments', function () {
    return view('departments');
})->name('department');


Route::get('employee', function () {
    return view('employee');
})->name('employee');


Route::get('activities', function () {
    return view('activities');
})->name('activities');


Route::get('holidays', function () {
    return view('holidays');
})->name('holidays');

Route::get('project_list', function () {
    return view('project_list');
})->name('project_list');


Route::get('taskboard', function () {
    return view('taskboard');
})->name('taskboard');


Route::get('ticket_list', function () {
    return view('ticket_list');
})->name('ticket_list');


Route::get('ticketdetails', function () {
    return view('ticketdetails');
})->name('ticketdetails');


Route::get('clients', function () {
    return view('clients');
})->name('clients');


Route::get('todo_list', function () {
    return view('todo_list');
})->name('todo_list');