<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PesananMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'barang' => [
                'type' => 'VARCHAR',
                'constraint' => '8'
            ],
            'jumlah' => [
                'type' => 'VARCHAR',
                'constraint' => '10'
            ],
            'dimensi' => [
                'type' => 'DATE',
            ],
            'tanggalmasuk' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'TEXT',
            ],
            'tanggalselesai' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');    
    }
}
