<?php

use App\Http\Controllers\ProjectController;
use App\Models\Status;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusesController;
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

Route::get('/skills', function() {
    return ['PHP', 'Vue', 'Js', 'Toolings'];
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/statuses', [StatusesController::class, 'index']);
Route::post('/statuses', [StatusesController::class, 'store']);

Route::resource('projects', ProjectController::class);

Route::view('/shared-state', 'shared-state');
Route::view('/custom-element', 'custom-element');
Route::view('/stream', 'stream.index');
Route::view('/scope-slot', 'scope-slot');
Route::view('/carousel', 'carousel');
Route::view('/tooltip', 'tooltip');
