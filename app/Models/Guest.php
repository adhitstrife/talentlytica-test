<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    /**
     * Get the score associated with the Guest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function score(): HasOne
    {
        return $this->hasOne(Score::class, 'guest_id');
    }
}
