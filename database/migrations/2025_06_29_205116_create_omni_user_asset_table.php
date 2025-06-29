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
           Schema::create('omni_user_asset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userid', 20);
            $table->tinyInteger('asset_type'); // 1 - live, 2 - demo
            $table->float('netAsset');
            $table->float('buyingPower');
            $table->float('profit_loss');
            $table->float('cash');
            $table->float('fundOnHold');
            $table->float('maxWithdrawal');
            $table->float('LMV');
            $table->string('currency', 5);
            $table->tinyInteger('status');
            $table->dateTime('created_date');
            $table->dateTime('modified_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omni_user_asset');
    }
};
