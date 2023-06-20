<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DiarioObjetivo extends Pivot
{
    protected $table = 'diario_objetivo';

    protected $fillable = [
        'diario_objetivo_id',
        'diario_id',
        'objetivo_id',
        'created_at',
        'updated_at'
    ];
}
