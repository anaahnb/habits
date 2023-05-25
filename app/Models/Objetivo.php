<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = 'objetivos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primary_key = "objetivo_id";
    protected $fillable = [
        // 'diario_id',
        'objetivo_nome',
        'created_at',
        'updated_at'
    ];

    // public function diario()
    // {
    //     $this->belongsTo(Diario::class, 'diario_id', 'diario_id');
    // }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
