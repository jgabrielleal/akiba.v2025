<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutodjPhrase extends Model
{
    protected $table = 'autodj_phrases';

    protected $fillable = [
        'autodj_id',
        'image',
        'phrase',
    ];

    /**
     * Relationship from model 'Autodj'
     */
    public function autodj()
    {
        return $this->belongsTo(Autodj::class);
    }
}
