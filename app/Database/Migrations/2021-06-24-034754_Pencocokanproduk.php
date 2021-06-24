<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pencocokanproduk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'ktp'          => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'judul1' => [
				'type' => 'TEXT',
				'constraint' => '200',
			],
			'judul2' => [
				'type' => 'TEXT',
				'constraint' => '200',
			],
			'algoritma' => [
				'type' => 'TEXT',
				'constraint' => '100',
			],

		]);
		$this->forge->addKey('ktp', true);
		$this->forge->createTable('pencocokanproduk');
	}

	public function down()
	{
		$this->forge->dropTable('pencocokanproduk');
	}
}
