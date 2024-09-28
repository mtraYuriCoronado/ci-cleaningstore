<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function new()
    {
        return view('cliente/new');
    }

    public function create()
    {
        $cliente = new ClienteModel();
        $cliente->insert([
            'nombre' => $this->request->getPost('nombre'),
            'rfc' => $this->request->getPost('rfc'),
            'direccion' => $this->request->getPost('direccion'),
            'email' => $this->request->getPost('email'),
            'contacto' => $this->request->getPost('contacto'),

        ]);
        
        return 'Peticion POST Cliente';
    }
}