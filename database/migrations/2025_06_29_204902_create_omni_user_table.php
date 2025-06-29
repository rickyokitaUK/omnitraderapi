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
        Schema::create('omni_user', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('username', 200);
            $table->string('password', 200);
            $table->string('usercode', 200);
            $table->tinyInteger('user_type');
            $table->string('user_email', 200);
            $table->dateTime('created_date');
            $table->integer('created_by');
            $table->dateTime('modified_date');
            $table->integer('modified_by');
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omni_user');
    }
};
