<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nombre' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'rfc' => [
                'type'              => 'VARCHAR',
                'constraint'        => 13,
            ],
            'direccion' => [
                'type'              => 'VARCHAR',
                'constraint'        => 500,
            ],
            'telefono' => [
                'type'              => 'VARCHAR',
                'constraint'        => 13,
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'contacto' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}
