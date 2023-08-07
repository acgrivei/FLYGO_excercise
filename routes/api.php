<?php

use App\Http\Controllers\CrosswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/crosswords/date/{date}', [CrosswordController::class, 'getCrosswordsForDate'])
    ->where('date', '[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}');

Route::get('/crosswords/all', function (Request $request) {
    return CrosswordController::getAllCrosswords();
});