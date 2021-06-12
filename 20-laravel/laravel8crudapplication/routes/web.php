<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::resource('posts', PostController::class);

//Simple Route using Laravel
//URL: http://localhost:8000/simple-route
Route::get('simple-route', function () {
    return 'This is Simple Route Example of nicesnippets.com';
});

//Routing calls view file.
//You can create route with directly call view blade file from route directly. 
//You can see bellow created route example:
//The view method accepts a URI as its first argument and a view name as its second argument. 
//In addition, you may provide an array of data to pass to the view as an optional third argument:
//URL: http://localhost:8000/blog
Route::view('/blog', 'index');

Route::view('/blog', 'index', ['name' => 'nicesnippets']);


//you can create route with call controller method so, 
//you can simply create controller method and call that method with your route as like bellow:
//use App\Http\Controllers\PostController;
// PostController
//URL: http://localhost:8000/post
/*Route::get('/post', [PostController::class, 'index']);

//Simple route by passing parameters
//use App\Http\Controllers\PostController;
// PostController
//URL: http://localhost:8000/post/15
Route::get('/post/{id}', [PostController::class, 'show']);

//You can create get, post, delete, put, patch methods route as bellow i created.
//use App\Http\Controllers\PostController;
// UserController
Route::get('posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'post']);
Route::put('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}', [PostController::class, 'delete']);*/

use App\Http\Controllers\TestController;
//Route::get('role', [TestController::class, 'index']);
Route::middleware([Role::class])->group(function(){
 
    Route::get('role', [TestController::class,'index']);
 
 });

/*use App\Http\Controllers\TestController;
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);*/
