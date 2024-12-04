<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Portafolio extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'portafolios'; // Asegúrate de que el nombre de la tabla sea correcto

    protected $fillable = [
        'name',
        'description',
        'image',
        'created_at', // Asegúrate de que el nombre del campo sea correcto
    ];

    protected static function boot()
    {
        parent::boot();

        // Ordenar por created_at desc
        static::addGlobalScope('order', function ($builder) {
            $builder->orderBy('created_at', 'desc');
        });
    }
}
