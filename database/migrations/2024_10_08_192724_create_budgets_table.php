<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('budgets', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('short_id')->unique();
      $table->string('customer_name');
      $table->dateTime('delivery_at')->nullable();
      $table->enum('status', ['pendente', 'entregue', 'cancelado'])->default('pendente');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('budgets');
  }
};
