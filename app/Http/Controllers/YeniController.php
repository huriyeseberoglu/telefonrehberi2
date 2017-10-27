<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Kisiler;
use Validator;
class YeniController extends Controller
{
    public function kayit()
    {
        return view('Yenikayit');
    }
    
    public function postKaydet(Request $request)
    {
        $kontrol= Validator::make($request->all(), array(
            'adi' => 'required',
            'soyadi' => 'required',
            'telefonu' => 'required',
            'digertel' => 'required',
            'adresi' => 'required'
        ));
        if (!$kontrol->fails())
        {
            $isim= $request->input('adi');
            $soyad= $request->input('soyadi');
            $telefon= $request->input('telefonu');
            $digertel= $request->input('digertel');
            $adres= $request->input('adresi');
            $kaydet= Kisiler::create(array(
                'adi' => $isim,
                'soyadi' => $soyad,
                'telefon' => $telefon,
                'adres' => $adres,
                'diger_telefon' => $digertel
            ));
            if ($kaydet)
            {
                return redirect()->route('listele');
            }
        }
        return redirect()->route('listele');
    }

    public function postGuncelle(Request $request)
    {
        $kontrol= Validator::make($request->all(), array(
            'adi' => 'required',
            'soyadi' => 'required',
            'telefonu' => 'required',
            'digertel' => 'required',
            'adresi' => 'required'
        ));
        if (!$kontrol->fails())
        {
            $idsi= $request->input('id');
            $adi= $request->input('adi');
            $soyad= $request->input('soyadi');
            $telefon= $request->input('telefonu');
            $dtelefon= $request->input('digertel');
            $adres= $request->input('adresi');
            $kullanici= Kisiler::find($idsi);

            $kullanici->adi=$adi;
            $kullanici->soyadi=$soyad;
            $kullanici->telefon=$telefon;
            $kullanici->diger_telefon=$dtelefon;
            $kullanici->adres=$adres;
            $kullanici->save();
            return redirect()->route('listele');
        }
        return redirect()->to('/')->withErrors($kontrol)->withInput();
    }
}
