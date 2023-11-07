<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class productTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_product' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga_product' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'stok_product' =>[
                'type' => 'INT',
                'constraint' => 15,      
            ],
            'foto_product' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null'          => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product', true);
    }
}
