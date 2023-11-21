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
            'tanggal_booking' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'id_karyawan' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'layanan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
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