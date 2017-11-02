<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Kisiler extends Model
{
    protected $table = "kisiler";
    protected $fillable = ['adi','soyadi','telefon','diger_telefon','adres','email'];
}
