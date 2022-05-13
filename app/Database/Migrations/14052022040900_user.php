<?php namespace App\Database\Migrations;

class User extends \CodeIgniter\Database\Migration{
    
    public function up() {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'TEXT'
            ],
            'salt' => [
                'type' => 'TEXT'
            ],
            'avatar' => [
                'type' => 'TEXT',
                'null' => TRUE
            ],
            'role' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1
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
        $this->forge->createTable('user');
    }

    public function down() {
        $this->forge->dropTable('user');
    }
}

?>