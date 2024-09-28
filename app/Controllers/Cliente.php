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
        echo $this->request->getPost('name');
        return 'Peticion POST Cliente';
    }
}