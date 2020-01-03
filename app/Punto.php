<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Punto extends Model
{
    //
    protected $fillable = [
        'puntos', 'jugador_id'
    ];
    public function jugador()
    {
        return $this->belongsTo('App\User', 'jugador_id');
    }
}
