<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public function Temporada()
    {
        return $this->belongsTo(Temporada::class);
    }
}
