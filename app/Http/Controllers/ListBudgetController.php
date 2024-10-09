<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class ListBudgetController
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('budgets.index');
  }
}
