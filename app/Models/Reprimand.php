<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reprimand extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Reprimand
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function officer()
    {
        return $this->belongsTo(Officer::class, 'officer_id');
    }
}
