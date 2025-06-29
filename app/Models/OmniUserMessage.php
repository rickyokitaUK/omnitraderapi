<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OmniUserMessage extends Model
{
    protected $table = 'omni_user_messages';
    public $timestamps = false;

    protected $fillable = ['sender_id', 'receiver_id', 'message', 'sent_at'];

    protected $casts = [
        'is_read' => 'boolean',
        'sent_at' => 'datetime'
    ];
}
