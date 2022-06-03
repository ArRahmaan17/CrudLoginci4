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
                'type'       => 'INT',
            ],
            'barang' => [
                'type' => 'INT',
            ],
            'jumlah' => [
                'type' => 'VARCHAR',
                'constraint' => '10'
            ],
            'dimensi' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'fotoproses' => [
                'type' => 'TEXT',
            ],
            'fotoselesai' => [
                'type' => 'TEXT',
            ],
            'tanggalmasuk' => [
                'type' => 'DATE',
            ],
            'tanggalselesai' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type' => 'TEXT',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');    
    }
}
