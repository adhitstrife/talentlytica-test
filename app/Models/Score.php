<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'x_value',
        'z_value',
        'y_value',
        'w_value',
    ];

    /**
     * Get the guest that owns the Score
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }
}
