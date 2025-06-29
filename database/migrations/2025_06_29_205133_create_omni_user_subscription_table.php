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
       Schema::create('omni_user_subscription', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('follow_id');
            $table->dateTime('follow_time');
            $table->integer('type');
            $table->integer('position');
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omni_user_subscription');
    }
};
