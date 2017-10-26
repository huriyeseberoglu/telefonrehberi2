<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Kisiler;
use Illuminate\Support\Facades\Input;
class ListeleController extends Controller
{
    public function getListele()
    {
        $veriler = Kisiler::whereRaw('id!=?', array(0))->get();
        return view('Listele', array('kullanıcıliste' => $veriler,'aranan' => ''));
    }

    public function getSonuc()
    {
        $aranan=Input::get('aramasorgusu');
        $aranankelime="%$aranan%";
        $sonuclar=Kisiler::whereRaw('adi like ? or soyadi like ? or telefon like ? or adres like ?',array($aranankelime,$aranankelime,$aranankelime,$aranankelime))->get();

        return view('Listele', array('kullanıcıliste' => $sonuclar,'aranan' => $aranan));
    }

   
}
