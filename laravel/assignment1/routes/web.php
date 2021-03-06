<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('student', [StudentsController::class, 'index']);
Route::post('student', 'StudentsController@store')->name('student.store');
Route::get('student/create', 'StudentsController@create')->name('student.create');
Route::get('student/{student}', 'StudentsController@show')->name('student.show');
Route::put('student/{student}', 'StudentsController@update')->name('student.update');
Route::delete('student/{student}', 'StudentsController@destroy')->name('student.destroy');
Route::get('student/{student}/edit', 'StudentsController@edit')->name('student.edit');

Route::resource('student', 'StudentsController');
Route::get('importExportView', 'StudentsController@importExportView')->name('importExportView');
Route::get('export', 'StudentsController@export')->name('export');
Route::post('import', 'StudentsController@import')->name('import');

Route::get('/send/email', 'StudentController@mail');