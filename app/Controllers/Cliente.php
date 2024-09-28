<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function new()
    {
        // session();
        $validation = \Config\Services::validation();
        var_dump($validation->listErrors());
        return view('cliente/new', ['validation' => $validation]);
    }

    public function create()
    {
        $cliente = new ClienteModel();

        // Validaciones
        if($this->validate('cliente')){
            $cliente->insert([
                'nombre' => $this->request->getPost('nombre'),
                'rfc' => $this->request->getPost('rfc'),
                'direccion' => $this->request->getPost('direccion'),
                'email' => $this->request->getPost('email'),
                'contacto' => $this->request->getPost('contacto'),
    
            ]);
            return 'Validacion e insersión correcta';
        }
        
        return redirect()->back()->withInput();
        
    }
}