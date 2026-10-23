<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function action1()
    {
        return view('welcome');
    }

    public function action2()
    {
        return view('form', ['isim'=>'Baki Sümer']);
    }

    public function action3()
        {
       // dd('meraba');
        return view('form');
        }
    public function hesapla(Request $request)
    {
        $request->validate([
            'vize' => 'required|numeric|min:0|max:100',
            'final' => 'required|numeric|min:0|max:100',
        ]);

        $ortalama = $request->vize * 0.4 + $request->final * 0.6;

        return view('sonuc', [
            'ortalama' => $ortalama,
            'gecti' => $ortalama >= 50,
        ]);
    }



    public function action4()
    {
        return view('welcome');
    }
}
