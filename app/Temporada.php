<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    public function Episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function Serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
