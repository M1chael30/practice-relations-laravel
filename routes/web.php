<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(SectionController::class)
  ->group(function () {

    //group of block
    Route::prefix('block')
      ->group(function () {
        //home
        Route::get('/', 'index')->name('block');
        // view sections with students belong to it
        Route::get('/{section}/view', 'show')->name('block.view.section');
        //view specific user
        Route::get('/{section}/view/{user}', 'showStudents')->name('block.view.student');

        //crud of section
        //create section
        Route::post('/',  'store')->name('section.store');
        //update section
        Route::put('/{section}/update',  'update')->name('section.update');
        //delete section
        Route::delete('/{section}/delete',  'delete')->name('section.delete');
      });



    //students
    Route::prefix('students')
      ->group(function () {
        // view students
        Route::get('/', 'students')->name('students');
        //add students into block
        Route::put('/{user}/store',  'addStudentToBlock')->name('students.add');
      });
  });



//department
Route::controller(DepartmentController::class)
  ->prefix('department')
  ->group(function () {
    //department
    Route::get('/', 'index')->name('department');
    //view individual department
    Route::get('/{department}/view', 'show')->name('view.department');

    //create department
    Route::post('/', 'store')->name('department.store');
    //update department
    Route::put('/{department}/update', 'update')->name('department.update');
    //delete department
    Route::delete('/{department}/delete', 'delete')->name('department.delete');
  });
