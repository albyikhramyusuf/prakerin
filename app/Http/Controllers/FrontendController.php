<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;
class FrontendController extends Controller
{
   public function berita(){
        $berita = Artikel::with('kategori')->take(4)->get();
        $response = [
            'success' => true,
            'data' => $berita,
            'message' => "Berhasil"
        ];

        return response()->json($response, 200);
   }
}
