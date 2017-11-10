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
            'adresi' => 'required',
            'email' => 'required',
            'resim' => 'required'
        ));

        if (!$kontrol->fails())
        {
            $isim= $request->input('isim');
            $soyad= $request->input('soyad');
            $telefon= $request->input('telefonu');
            $adres= $request->input('adresi');
            $mail= $request->input('email');
            $resim= $request->input('resim');
            $kaydet= Kisiler::create(array(
                'adi' => $isim,
                'soyadi' => $soyad,
                'telefon' => $telefon,
                'adres' => $adres,
                'email' => $mail,
                'resim' => $resim

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
            'adresi' => 'required',
            'email' => 'required',
            'resim' => 'required'
        ));
        if (!$kontrol->fails())
        {
            $idsi= $request->input('id');
            $adi= $request->input('adi');
            $soyad= $request->input('soyadi');
            $telefon= $request->input('telefonu');
            $adres= $request->input('adresi');
            $mail= $request->input('email');
            $resim= $request->input('resim');
            $kullanici= Kisiler::find($idsi);

            $kullanici->adi=$adi;
            $kullanici->soyadi=$soyad;
            $kullanici->telefon=$telefon;
            $kullanici->adres=$adres;
            $kullanici->email=$mail;
            $kullanici->resim=$resim;
            $kullanici->save();
            return redirect()->route('listele');
        }
        return redirect()->to('/')->withErrors($kontrol)->withInput();
    }
}
