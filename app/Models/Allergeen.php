<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    use HasFactory;

    protected $fillable = [

        //Pak het id van product om het te kunnen koppelen en de verpakkingseenheid en aantalaanwezig van magazijn tabel
        'product_id',
        'allergeen_naam',
        'omschrijving',

    ];
}
