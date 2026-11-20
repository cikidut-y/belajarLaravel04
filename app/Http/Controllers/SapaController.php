<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Meng';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
