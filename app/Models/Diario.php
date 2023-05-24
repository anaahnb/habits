<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    protected $table = 'diarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primary_key = "diario_id";
    protected $fillable = [
        'user_id',
        'diario_data',
        'created_at',
        'updated_at'
    ];

    public function objetivos()
    {
        $this->hasMany(Objetivo::class, 'diario_id', 'diario_id');
    }

    public function user()
    {
        $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
