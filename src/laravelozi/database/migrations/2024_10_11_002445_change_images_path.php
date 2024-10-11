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
        Schema::table('Posts', function (Blueprint $table) {
            $table->string('image1_path')->nullable(true)->change();
            $table->string('image2_path')->nullable(true)->change();
            $table->string('image3_path')->nullable(true)->change();
            $table->string('image4_path')->nullable(true)->change();
            $table->string('text1')->nullable(true)->change();
            $table->string('text2')->nullable(true)->change();
            $table->string('text3')->nullable(true)->change();
            $table->string('text4')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Posts', function (Blueprint $table) {
            //
        });
    }
};
