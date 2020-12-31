<?php

namespace App;
use Auteur;
use Genre;
use Tage;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function tags()
    {
        return $this->hasMany(Tage::class);
    }
}
