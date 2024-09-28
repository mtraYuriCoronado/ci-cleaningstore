<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model{

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','rfc', 'direccion', 'telefono', 'email', 'contacto'];
}