<?php

namespace App\Controllers;

class Cliente extends BaseController
{
    public function new()
    {
        return view('cliente/new');
    }

    public function create()
    {
        echo $this->request->getPost('nombre');
        return 'Peticion POST Cliente';
    }
}