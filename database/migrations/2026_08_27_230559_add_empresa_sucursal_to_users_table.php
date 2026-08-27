<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   Public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->foreignId('empresa_id')->nullable()->constrained('empresas');
        $table->foreignId('sucursal_id')->nullable()->constrained('sucursales');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
