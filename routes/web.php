<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\RegistationController;

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

Route::get('/home',[HomeController::class, 'index']);

// ------------------------Route Learning Start ---------------------------
/*
Route::get('/demo', function(){
    echo "Hello World Laravel";
});

Route::post('/test', function(){
    echo "Testin Post Method";
});

Route::any('/test', function(){
    echo "Testin Post Method";
});
Route::get('/demo', function(){
    return view('demo');
});

Route::get('/demo/{name}/{id?}', function($name, $id= null){
    echo $name . " ";
    echo $id;
});

Route::get('/demo/{name}/{id?}', function($name, $id= null){
    $data = compact('name', 'id');
    return view('demo')->with($data);
});

// Route::put('users/{id}', function($id){

// })

// Route::patch();
// Route::delete('users/{id}', function($id){

// })

*/
// <------------------------blade Learning Start ------------------------->

// Route::get('/home/{name?}', function($name = null){
//     $demo = '<h1>Testing Demo html</h1>';
//     $data = compact('name', 'demo');
//     return view('home')->with($data);
// });


// <------------------------blade Learning End --------------------------->

// <------------------------Controller Learning Start ------------------------->
Route::get('/', [DemoController::class, 'index']);
Route::get('/user', [DemoController::class, 'user']);

Route::get('/course', SingleActionController::class);

// <---------------------Controller Learning End --------------------------->
// <----------------------Form Handaling Learning Start ---------------------->
Route::get('/register',[RegistationController::class, 'index']);
Route::post('/register',[RegistationController::class, 'register']);

// <------------------------Form Handaling Learning End--------------------------->

// <------------------------Form Handaling Learning Start ------------------------->


// <------------------------Form Handaling Learning End--------------------------->



// <------------------------Form Handaling Learning Start ------------------------->


// <------------------------Form Handaling Learning End--------------------------->



// <------------------------Form Handaling Learning Start ------------------------->


// <------------------------Form Handaling Learning End--------------------------->






// Route::get('/{name}', function($name){
//     return $name;
// });

// Route::get('/{name}/{id?}', function($name, $id = null){
//     echo $name. "";
//     echo $id;
// });

// Route::get('/user/{name?}', function($name = null){
//     $data = compact('name');
//     return view('user')->with($data);
// });
// Route::get('/welcom', function(){
//     echo 'Welcome To checking summery Thanks';
// });
