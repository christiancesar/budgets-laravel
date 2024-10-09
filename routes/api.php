<?php

use App\Http\Controllers\BudgetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//   return $request->user();
// })->middleware('auth:sanctum');

Route::post('/budgets', [BudgetController::class, 'store']);
Route::get('/budgets', [BudgetController::class, 'index']);
Route::get('/budgets/{id}', [BudgetController::class, 'show']);
Route::patch('/budgets/{id}', [BudgetController::class, 'update']);
Route::delete('/budgets/{id}', [BudgetController::class, 'destroy']);
