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
        Schema::create('omni_user_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sender_id');    // references omni_user.userid
            $table->unsignedInteger('receiver_id');  // references omni_user.userid
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->timestamp('sent_at')->useCurrent();
            
            $table->foreign('sender_id')->references('userid')->on('omni_user')->onDelete('cascade');
            $table->foreign('receiver_id')->references('userid')->on('omni_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omni_user_messages');
    }
};
