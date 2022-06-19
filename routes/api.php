<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ArtcleController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Article API endpoint
 */
Route::namespace("post")->group(function() {

    Route::post("post/create", [ ArtcleController::class, "create"])->name("post.create");

    Route::post("post/subscribe", [SubscriberController::class, "subscribe"])->name("post.subscribe");
});
