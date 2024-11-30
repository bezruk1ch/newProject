<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    // Отчёт принадлежит одному пользователю
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Отчёт относится к одному статусу
    public function status() : BelongsTo
    {
        return $this->belongsTo(Statuses::class);
    }

}
