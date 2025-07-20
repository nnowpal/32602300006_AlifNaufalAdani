<?php

namespace App\Controllers;

class ProfilController extends BaseController
{
    public function profil()
    {
        return view('profil');
    }

    public function pengalaman()
    {
        return view('pengalaman');
    }
}
