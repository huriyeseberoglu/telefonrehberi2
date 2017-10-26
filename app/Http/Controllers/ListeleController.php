<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Kisiler;

class ListeleController extends Controller
{
    public function getListele()
    {
        $veriler = Kisiler::whereRaw('id!=?', array(0))->get();
        return view('Listele', array('kullanıcıliste' => $veriler,'aranan' => ''));
    }


   
}
