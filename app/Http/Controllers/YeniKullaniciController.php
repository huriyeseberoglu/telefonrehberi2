<?php

namespace App\Http\Controllers;

use App\Http\Models\Kisiler;
use Illuminate\Http\Request;
use Validator;

class YeniKullaniciController extends Controller
{
    public function kayit()
    {
        return view('Yenikayit');
    }
    

}
