<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendar';

    protected $fillable = [
        'user_id',
        'hour',
        'day',
        'category',
        'content',
    ];

    protected $casts = [
        'hour' => 'time',
    ];

    /**
     * Relationship with the 'Users' model.
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
