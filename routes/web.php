<?php

use App\Livewire\Budgets\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('budgets.index');
