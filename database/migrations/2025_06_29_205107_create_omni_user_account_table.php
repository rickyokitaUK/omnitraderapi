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
        Schema::create('omni_user_account', function (Blueprint $table) {
            $table->increments('acc_id');
            $table->string('userid', 20);
            $table->string('parentid', 20);
            $table->integer('viewonly');
            $table->string('server', 200);
            $table->string('port', 10);
            $table->tinyInteger('acc_type');
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omni_user_account');
    }
};
