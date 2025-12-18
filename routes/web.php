<?php

use App\Http\Middleware\AuthList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;





Route ::get('/', [TestController::class, 'page'])->name('compte');
Route ::get('/login', [TestController::class, 'authpage'])->name('auth');

Route ::get('/liste', [TestController::class, 'liste'])
->name('listes')->middleware(AuthList::class);

Route ::post('/liste', [TestController::class, 'liste'])
->name('listes')->middleware(AuthList::class);

Route ::post('/save', [TestController::class, 'save_todo'])
->name('send_todo');

Route::get('/editTodo/{id}', [TestController::class, 'editList'] )->name('liste.edit');
Route::post('/editTodo/{id}', [TestController::class, 'updateList'] )->name('liste.edit');

Route::get('/showTodo/{id}', [TestController::class, 'showList'])->name('liste.show');
Route::get('/deleteTodo/{id}', [TestController::class, 'delete'])->name('liste.delete');
Route::post('/deleteTodo/{id}', [TestController::class, 'delete'])->name('liste.delete');





