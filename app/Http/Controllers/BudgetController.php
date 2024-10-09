<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $budgets = Budget::all();
    return response()->json($budgets);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $uuid = fake()->uuid;
    $shortId = strtoupper(substr($uuid, -5));
    $budget = Budget::create([
      'id' => $uuid,
      'short_id' => $shortId,
      'customer_name' => $request->customer_name,
    ]);

    return response()->json($budget);
  }

  /**
   * Display the specified resource.
   */
  public function show(Request $request)
  {
    $budgetId = $request->id;
    $budget = Budget::find($budgetId);
    if ($budget === null) {
      return response()->json("Indentify not exist", 400);
    }

    return response()->json($budget);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {

    $customer_name = $request->input("customer_name");
    $status = $request->input("status");

    $budgetAlreadyExists = Budget::find($request->id);

    if ($budgetAlreadyExists === null) {
      return response()->json("Indentify not exist", 400);
    }

    if (!in_array($status, ['pendente', 'entregue', 'cancelado', ''])) {
      return response()->json("Status not exist", 400);
    }

    $status = empty($status) ? $budgetAlreadyExists->status : $status;

    Budget::query()->where('id', '=', $request->id)->update([
      'customer_name' => !empty($customer_name) ? $customer_name : $budgetAlreadyExists->customer_name,
      'status' => $status,
      "delivery_at" => $status === "entregue" ? now() : null,
    ]);

    return response()->json(Budget::find($request->id));
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request)
  {
    $budgetId = $request->id;
    $budget = Budget::find($budgetId);
    if ($budget === null) {
      return response()->json("Indentify not exist", 400);
    }

    Budget::destroy($budgetId);
    return response()->json();
  }
}
