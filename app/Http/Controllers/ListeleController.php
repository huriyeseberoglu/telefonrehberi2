<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListeleController extends Controller
{
    public function getListele()
    {
        return view('Listele');
    }
}
