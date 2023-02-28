<?php

use App\Http\Controllers\CourseController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/programming-languages', function () {
    return response()->json([
        'status' => 'ok',
        'languages' => [
            'PHP', 'Java', 'JavaScript', 'C#'
        ]
    ]);
});

Route::get('/courses/longer', [CourseController::class, 'getLongerCourses']);
Route::get('/courses/shorter', [CourseController::class, 'getShorterCourses']);
Route::get('/courses', [CourseController::class, 'getAll']);
Route::get('/courses/{name}', [CourseController::class, 'getCoursesByName']);