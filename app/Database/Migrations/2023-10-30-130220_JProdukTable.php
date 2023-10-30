<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JProdukTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'namajenis_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        $this->forge->createTable('jenis_produk');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_produk', true);
    }
}
