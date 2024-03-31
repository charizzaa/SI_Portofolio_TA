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
        Schema::create('loginstatus', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_user');
            $table->index('id_user');
            $table->boolean('login_status')->default(false);
            $table->timestamp('last_login_at')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loginstatus');
    }
};
