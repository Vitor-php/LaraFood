
<?php

use App\Http\Controllers\PlanController;

use Illuminate\Support\Facades\Route;

Route::get('/admin/plans', [PlanController::class, 'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
