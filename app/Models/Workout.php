<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workout extends Model
{
    use SoftDeletes;

    public $fillable = [
        'title',
        'description',
        'trainer',
        'date',
        'slots',
        'is_active',
        'user_id'
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'date' => 'datetime',
            'slots' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
