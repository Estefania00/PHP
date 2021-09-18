<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cancion;

class Genero extends Model
{
    /* use HasFactory; */
    protected $table = "genre";
    protected $primaryKey = "GenreId";
    public $timestamps = false;

    //Relacion 1 a m con Disco
    //extetnder el modelo
    //                PLURAL
    public function canciones()
    {
        return $this->hasMany(Cancion::class, 'GenreId');
    }
}
