<?php

namespace App\Controllers;

class Cliente extends BaseController
{
    public function new()
    {
        return 'Nuevo cliente';
    }

    public function create()
    {
        return 'Peticion POST Cliente';
    }
}