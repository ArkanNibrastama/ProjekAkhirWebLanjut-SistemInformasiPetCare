<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukTable extends Migration
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
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'stok_produk' =>[
                'type' => 'INT',
                'constraint' => 15,      
            ],
            'foto_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null'          => true,
            ],
            'id_jenis' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
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
        $this->forge->addForeignKey('id_jenis','jenis_produk','id');
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk', true);
    }
}
