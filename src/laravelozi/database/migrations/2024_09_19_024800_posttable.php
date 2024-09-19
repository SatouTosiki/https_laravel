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
            $table->renameColumn('image1', 'image1_path');
            $table->renameColumn('image2', 'image2_path');
            $table->renameColumn('image3', 'image3_path');
            $table->renameColumn('image4', 'image4_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Post', function (Blueprint $table) {
            //
        });
    }
};
