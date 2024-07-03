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
        Schema::create('lease', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('lease_name');
            $table->string('division');
            $table->string('location');
            $table->string('type');
            $table->string('unit_type');
            $table->double('unit_price');
            $table->string('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease');
    }
};
