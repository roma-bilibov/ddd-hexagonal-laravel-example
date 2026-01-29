<?php

use Illuminate\Support\Facades\Route;
use Src\Admin\User\Infrastructure\Controllers\POST_CreateUserController; 
use Src\Admin\User\Infrastructure\Controllers\GET_FindUserByUuidController;


Route::post('/store', [POST_CreateUserController::class, 'index']);
Route::get('/{uuid}', [GET_FindUserByUuidController::class, 'index']);