<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    // Um hábito pode ter muitos logs
    public function habit_logs(): HasMany
    {
        return $this->hasMany(Habit_Log::class);
    }

    // Um hábito pertence a um usuário
    public function user(): BelongsTo
    {
      return $this->belongsTo(User::class);
    }

}
