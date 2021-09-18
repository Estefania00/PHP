<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disco;

class Artista extends Model
{
    /* use HasFactory; */
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;


    //Relacion 1 a m con Disco

    public function discos()
    {
        return $this->hasMany(Disco::class, 'ArtistId');
    }
}
