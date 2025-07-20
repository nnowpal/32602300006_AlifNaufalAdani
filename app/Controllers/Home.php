<?php

namespace App\Controllers;

class Home extends BaseController
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