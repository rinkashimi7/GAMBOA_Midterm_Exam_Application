<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutController extends Controller
{
    public function product() {
        $animes = array(
            "anime1" => "Seven Deadly Sins",
            "anime2" => "One Piece",
            "anime3" => "Initial D",
            "anime4" => "Baki: Son of Ogre"
        );
        return View('animes', ['animes' => $animes]);
    }
}
