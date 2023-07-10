<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

use App\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testv3', [App\Http\Controllers\Testv2::class, 'index']);
Route::get('/read', function () {
    $posts = Post::all();
    foreach ($posts as $post) {
        echo $post->body;
        echo "<br>";
    }
});
Route::resource('companies', CompanyController::class);

