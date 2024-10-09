<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
  /** @use HasFactory<\Database\Factories\BudgetFactory> */
  use HasFactory, HasUuids;

  protected $fillable = [
    'customer_name',
    'delivery_at',
    'status',
    'short_id'
  ];
}
