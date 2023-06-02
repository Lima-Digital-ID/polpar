<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReprimandsPenalty extends Model
{
    use HasFactory;
    /**
     * Get the penalty that owns the ReprimandsPenalty
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penalty()
    {
        return $this->belongsTo(Penalty::class, 'penalty_id');
    }
}
