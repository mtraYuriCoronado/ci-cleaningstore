<?php

use CodeIgniter\Model;

class ClienteModel extends Model{

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['rfc', 'direccion', 'telefono', 'email', 'contacto'];
}