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
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['volunteers_id']);
            $table->dropColumn('volunteers_id');

            $table->unsignedBigInteger('volunteer_id')->nullable();
            $table->foreign('volunteer_id')
                  ->references('id')
                  ->on('volunteers')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
             $table->dropForeign(['volunteer_id']);
            $table->dropColumn('volunteer_id');

            $table->unsignedBigInteger('volunteers_id')->nullable();
            $table->foreign('volunteers_id')
                  ->references('id')
                  ->on('volunteers')
                  ->onDelete('cascade');
        });
    }
};
