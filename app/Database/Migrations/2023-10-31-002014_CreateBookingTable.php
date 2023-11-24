<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatebookingTable extends Migration
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
            'nama_pemilik' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nomor_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_hewan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_hewan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'usia_hewan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'layanan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_booking' => [
                'type' => 'DATETIME',
                'null' => true,
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
        $this->forge->createTable('booking');
    }

    public function down()
    {
        $this->forge->dropTable('booking', true);
    }
}