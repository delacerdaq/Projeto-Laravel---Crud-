<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teachers/novo', [App\Http\Controllers\TeacherController::class, 'create' ]);
Route::post('/teachers/novo', [App\Http\Controllers\TeacherController::class, 'store' ])->name('registrar_professor');
Route::get('/teachers/ver/{id}', [App\Http\Controllers\TeacherController::class, 'show' ]);
Route::get('/teachers/editar/{id}', [App\Http\Controllers\TeacherController::class, 'edit' ]);
Route::post('/teachers/editar/{id}', [App\Http\Controllers\TeacherController::class, 'update' ])->name('alterar_professor');
Route::get('/teachers/excluir/{id}', [App\Http\Controllers\TeacherController::class, 'delete' ]);
Route::delete('/teachers/excluir/{id}', [App\Http\Controllers\TeacherController::class, 'destroy' ])->name('excluir_professor');


