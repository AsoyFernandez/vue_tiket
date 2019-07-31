<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categori;

class Tiket extends Model
{
    protected $guarded = [];

    public function categori()
    {
    	return $this->belongsTo(Categori::class, 'categori_id', 'id');
    }
}
