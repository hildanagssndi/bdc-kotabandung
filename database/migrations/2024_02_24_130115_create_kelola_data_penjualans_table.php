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
        Schema::create('kelola_data_penjualans', function (Blueprint $table) {
            $table->id();
            $table->date('date_sale')->nullable();
            $table->foreignId('kelola_data_ksm_id')->constrained('kelola_data_ksms')->onDelete('cascade');
            $table->double('sale')->nullable();
            $table->double('profit')->nullable();
            $table->double('loss')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelola_data_penjualans');
    }
};
