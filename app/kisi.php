<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kisi extends Model
{
    protected $table = "kisiler";
    protected $fillable = ['adi','soyadi','telefon','diger_telefon','adres'];
}
