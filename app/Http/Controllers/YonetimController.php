<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YonetimController extends Controller
{
   public function index()
   {
 return view("include.home");

   }
    public function musteriEkle()
    {
        return view("include.musteri-ekle");

    }
}
