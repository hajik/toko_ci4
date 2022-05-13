<?php namespace App\Database\Migrations;

class Barang extends \CodeIgniter\Database\Migration{
    
    public function up() {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'harga' => [
                'type'=> 'INT',
                'constraint' => 11
            ],
            'stok' => [
                'type'=> 'INT',
                'constraint' => 11
            ],
            'gambar' => [
                'type'=> 'TEXT',
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('barang');
    }

    public function down() {
        $this->forge->dropTable('barang');
    }
}

?>