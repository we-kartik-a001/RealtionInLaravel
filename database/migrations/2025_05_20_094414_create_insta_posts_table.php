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
        Schema::create('insta_posts', function (Blueprint $table) {
            $table->id();
            $table->string('detail');
            $table->unsignedBigInteger('Insta_user_id');
            $table->timestamps();

            $table->foreign('Insta_user_id')
                  ->references('id')
                  ->on('insta_users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insta_posts');
    }
};
