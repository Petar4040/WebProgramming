<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('jobs.index');
// });

// Route::get('/jobs', function () {
//     $title = 'Available Jobs';
//     $jobs = [
//         'Software Engineer',
//         'Web Developer',
//         'Data Scientist',
//     ];

//     return view('jobs.index', compact('title', 'jobs'));
// });

// Route::get('/test', function () {
//     return view('jobs.test');
// })->name('test');

// Route::get('/linktest', function () {
//     $url = route(name: 'test');
//     return "<a href='{$url}'>Go to Test Page</a>";
// });

// Route::get('/testhtml/{id}', function ($id) {
//     return "The ID you provided is: " . htmlspecialchars($id);
// });


// Route::get("/records", function(){
//     $listofRecords = [
//         ["name" => "First Round", "id" => "1"],
//         ["name" => "Second Round", "id" => "2"],
//         ["name" => "Third Round", "id" => "3"]
//     ];
    
//     return view('records', ["listofRecords" => $listofRecords]);
// });

// Route::get("/students", function(){
//     $students = [
//         ["id" => 1, "name" => "Alice", "email" => "alice@example.com"],
//         ["id" => 2, "name" => "Bob", "email" => "bob@example.com"],
//         ["id" => 3, "name" => "Charlie", "email" => "charlie@example.com"]
//     ];
    
//     return view('students', ["students" => $students]);
// });

Route::resource('jobs', JobController::class);
Route::get('/books', [BookController::class, 'home']);
Route::get('/books/create', [BookController::class, 'create']);
