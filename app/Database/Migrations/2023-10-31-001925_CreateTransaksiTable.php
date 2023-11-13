<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatetransaksiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tanggal_transaksi' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'jumlah_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'id_karyawan' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi', true);
    }
}
