<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objetivos extends Model
{
    protected $table = 'objetivos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'diario_id',
        'objetivo_nome',
        'objetivo_descricao',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
