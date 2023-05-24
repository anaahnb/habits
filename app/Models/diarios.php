<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diarios extends Model
{
    protected $table = 'diarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id',
        'diario_data',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
