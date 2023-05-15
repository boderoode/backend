<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    use HasFactory;

    protected $fillable = [

        //Pak het id van product om het te kunnen koppelen en de verpakkingseenheid en aantalaanwezig van magazijn tabel
        'leverancier_id',
        'product_id',
        'verpakkingseenheid',
        'aantalaanwezig',

    ];
}
