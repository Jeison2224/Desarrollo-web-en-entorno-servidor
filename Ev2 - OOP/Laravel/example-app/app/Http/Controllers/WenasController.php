<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wenascontroller extends Controller
{
    //

    public function __invoke() {
        return "Adios cabros";
    }

    public function show($nombre) {
        $data['nombre'] = $nombre;
        return view('adios', $data);
    }

}
