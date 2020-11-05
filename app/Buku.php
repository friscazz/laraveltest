<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "buku";

    public function genre()
    {

        return $this->belongsTo('App\Genre', 'id');

    }
}
