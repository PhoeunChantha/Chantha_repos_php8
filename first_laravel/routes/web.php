<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
//Old
// Route::get('/', function () {
//     return view('welcome_old');
// });
//New
Route::get('dog',function(){
    return view('welcome_new');
});

Route::get('example',function(){
    return "THis is an example";
});

//example 1
Route::get('/example',function(){
    echo "This is an example";
});
//example 2
Route::get('/sum/{id}',function($id){
    return"This is sum($id)";
});
//example 3
Route::get('/User/edit/{id}',function($id){
    return"User with this($id)was edited.";
});
//
Route::get('book/{title}',function($title=null){
    $books=["C#","Web","PHP","Java"];
    if($title==null){
        return $books;
    }
    $book=array_filter($books,fn($item)=>$item==$title);
    return $book;
});

//compact()
Route::get('contact',function(){
    $name="Phoeun Chantha";
    // $Phone="086379682";
   $Phone=null;
    return view('contact',compact('name','Phone'));
});
//make controller = php artisan make:controller filename

//Controller
// Route::get('posts/idex',[PostController::class,'index']);
// Route::get('posts/example1',[PostController::class,'example1']);
// Route::get('posts/example2/{id}',[PostController::class,'example2']);


Route::prefix("posts")->group(function(){
    Route::get('/index',[PostController::class,'index']);
    Route::get('/example1',[PostController::class,'example1']);
    Route::get('/example2/{id}',[PostController::class,'example2']);
});
//
Route::get('table',function(){
    return view('table');
});
//
Route::get('user/{userid}/post/edit/{id}',function($userid,$id){
    return ("User Like $userid and edit to $id");
});
//
Route::get('book/{title?}',function($title=null){
    $books = ["C#","Java","PHP","Web","PC"];
    if($title==null){
        return $books;

    }
    $books=array_filter($books,fn($item)=>$item==$title);
});
//
