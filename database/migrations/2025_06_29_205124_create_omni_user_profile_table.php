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
       Schema::create('omni_user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userid', 10);
            $table->tinyInteger('trade_type'); // 1 - demo, 2 - live
            $table->string('market_server', 255);
            $table->string('market_port', 10);
            $table->string('trade_server', 255);
            $table->string('trade_port', 10);
            $table->tinyInteger('viewonly');
            $table->boolean('isalgo');
            $table->tinyInteger('textcolorScheme'); // 1 = green/red, 2 = red/green
            $table->tinyInteger('status'); // 1 = active, 2 = disabled
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omni_user_profile');
    }
};
