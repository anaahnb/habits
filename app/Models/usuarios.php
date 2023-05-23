<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{

    protected $table = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_nome',
        'usuario_email',
        'usuario_dt_nascimento',
        'usuario_telefone',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
