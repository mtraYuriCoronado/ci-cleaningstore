<?php

namespace App\Controllers;

class Ejemplo extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "Ejemplo1",
            "subtitle" => "Subtitulo de ejemplo",
        ];
        return view('ejemplo/index', $data);
    }
}
