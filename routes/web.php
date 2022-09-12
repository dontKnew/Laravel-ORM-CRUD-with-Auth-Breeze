<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::controller(StudentController::class)->group(function(){
    Route::middleware('auth','verified')->group(function () {
        Route::match(["get", "post"] , "add-student", "addStudent")->name("add-student");;
        Route::match(["get", "put"] , "update-student/{id?}", "updateStudent")->middleware(['auth'])->name("update-student");;
        Route::get("/delete-student/{id?}", "deleteStudent")->name("delete-student");
        Route::match(["get","post"],'dashboard/{orderby?}/{method?}', "index")->name('dashboard');
    });
});
    
route::redirect("/","dashboard");

route::get("practice",[HomeController::class,"index"]);


require __DIR__.'/auth.php';
