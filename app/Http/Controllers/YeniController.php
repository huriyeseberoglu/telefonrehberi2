<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Kisiler;
use Validator;
class YeniController extends Controller
{
    function kayit()
    {
        return view('Yenikayit');
    }

    public function postKaydet(Request $request)
    {
        /** @var $kontrol \Illuminate\Contracts\Validation\Validator*/
        $kontrol= Validator::make($request->all(), array(
            'isim' => 'required',
            'soyad' => 'required',
            'telefonu' => 'required',
            'digertel' => 'required',
            'adresi' => 'required',
            'email' => 'required'
        ));


        if (!$kontrol->fails())
        {
            $isim= $request->input('isim');
            $soyad= $request->input('soyad');
            $telefon= $request->input('telefonu');
            $digertel= $request->input('digertel');
            $adres= $request->input('adresi');
            $mail= $request->input('email');
            $kaydet= Kisiler::create(array(
                'adi' => $isim,
                'soyadi' => $soyad,
                'telefon' => $telefon,
                'diger_telefon' => $digertel,
                'adres' => $adres,
                'email' => $mail

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
            'adresi' => 'required',
            'email' => 'required'
        ));
        if (!$kontrol->fails())
        {
            $idsi= $request->input('id');
            $adi= $request->input('adi');
            $soyad= $request->input('soyadi');
            $telefon= $request->input('telefonu');
            $dtelefon= $request->input('digertel');
            $adres= $request->input('adresi');
            $mail= $request->input('email');
            $kullanici= Kisiler::find($idsi);

            $kullanici->adi=$adi;
            $kullanici->soyadi=$soyad;
            $kullanici->telefon=$telefon;
            $kullanici->diger_telefon=$dtelefon;
            $kullanici->adres=$adres;
            $kullanici->email=$mail;
            $kullanici->save();
            return redirect()->route('listele');
        }
        return redirect()->to('/')->withErrors($kontrol)->withInput();
    }
}
