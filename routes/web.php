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

Route::get('/disciplines/novo', [App\Http\Controllers\DisciplineController::class, 'create' ]);
Route::post('/disciplines/novo', [App\Http\Controllers\DisciplineController::class, 'store' ])->name('registrar_disciplina');
Route::get('/disciplines/ver/{id}', [App\Http\Controllers\DisciplineController::class, 'show' ]);
Route::get('/disciplines/editar/{id}', [App\Http\Controllers\DisciplineController::class, 'edit' ]);
Route::post('/disciplines/editar/{id}', [App\Http\Controllers\DisciplineController::class, 'update' ])->name('alterar_disciplina');
Route::get('/disciplines/excluir/{id}', [App\Http\Controllers\DisciplineController::class, 'delete' ]);
Route::delete('/disciplines/excluir/{id}', [App\Http\Controllers\DisciplineController::class, 'destroy' ])->name('excluir_disciplina');
