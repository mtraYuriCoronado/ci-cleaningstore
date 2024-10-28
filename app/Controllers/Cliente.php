<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function index(): string
    {
        return view('cliente/index');
    } 

    public function new()
    {
        // session();
        $validation = \Config\Services::validation();
        // var_dump($validation->listErrors());
        $data = [
            'page_title' => 'Clientes',
            'form_title' => 'Agregar nuevo cliente',
            'validation' => $validation,
        ];
        return view('cliente/new', $data);
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