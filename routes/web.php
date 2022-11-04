<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudapp;


Route::get("/",[crudapp::class,"homepage"]);
Route::get("/add",[crudapp::class,"addpage"]);
Route::post("/add",[crudapp::class,"addRecord"]);
Route::get("/delete/{num}",[crudapp::class,"deleteRecord"]);
Route::get("/update/{num}",[crudapp::class,"updateRecord"]);
Route::post("/update/",[crudapp::class,"updatePage"]);
