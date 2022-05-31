<?php namespace App\Database\Migrations;

class KomentarAlterKomentar extends \CodeIgniter\Database\Migration {

	public function up()
	{
		$fields = [
			'komentar'=>[
				'type'=>'TEXT'
			],
		];

		$this->forge->addColumn('komentar', $fields);
		
	}
	public function down()
	{
		$this->forge->dropColumn('komentar', ['komentar']);
	}
}
