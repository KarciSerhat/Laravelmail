<?php

namespace App\Http\Controllers;

use App\Models\Musteriler;
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
    public function musteriEklePost(Request $request)
    {
     $request->validate([
         'adsoyad'=>'required',
         'mail'=>'required|email:rfc,dns'
     ]);
     Musteriler::create([
         'adsoyad'=>$request->adsoyad,
         'mail'=>$request->mail,
         'telefon'=>$request->telefon
     ]);
  return redirect()->route('musteri-ekle')->with('success','Müşteri Bilgisi Başarıyla Eklendi');
    }
    public function musteriListe()
    {

        $musteriler=Musteriler::all();
       return view('include.musteri-liste',compact('musteriler'));
    }

}
