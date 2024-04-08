<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('password_reset_tokens', function (Blueprint $table): void {
      $table->string('email')->primary();
      $table->string('token');
      $table->timestamp('created_at')->nullable();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('password_reset_tokens');
  }
};
