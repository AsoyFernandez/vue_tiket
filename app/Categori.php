<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tiket;
class Categori extends Model
{
    protected $guarded = [];

    public function tiket()
    {
    	return $this->hasMany(Tiket::class, 'categori_id', 'id');
    }
}
