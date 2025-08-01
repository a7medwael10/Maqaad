<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'isReply',
    ];

    protected $casts = [
        'isReply' => 'boolean',
    ];
}
