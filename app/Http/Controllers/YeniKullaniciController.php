<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YeniKullaniciController extends Controller
{
    public function kayit()
    {
        return view('Yenikayit');
    }
}
