<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BarangMigration extends Migration
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
            'jumlah' => [
                'type' => 'VARCHAR',
                'constraint' => '8'
            ],
            'hargasatuan' => [
                'type' => 'VARCHAR',
                'constraint' => '10'
            ],
            'dimensi' => [
                'type' => 'TEXT',
            ],
            'tanggalmasuk' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barangmasuk');
    }

    public function down()
    {
         $this->forge->dropTable('barangmasuk');
    }
}
