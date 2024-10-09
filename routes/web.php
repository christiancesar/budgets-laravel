<?php

use App\Http\Controllers\ListBudgetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListBudgetController::class, 'index'])->name('budgets.index');
