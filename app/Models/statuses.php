<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Statuses extends Model
{
    use HasFactory;

    // Один статус может относиться ко многим отчётам
    public function reports() : HasMany
    {
        return $this->hasMany(Report::class);
    }
}
