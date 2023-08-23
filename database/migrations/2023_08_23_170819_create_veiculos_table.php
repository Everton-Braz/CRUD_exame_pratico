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
    Schema::create('veiculos', function (Blueprint $table) {
      $table->id();
      $table->string("modelo");
      $table->date("data");
      $table->string("placa")->unique();
      $table->string("Tipo_de_acessibilidade");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('veiculos');
  }
};
