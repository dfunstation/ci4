<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_mahasiswa'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nim'       		 => [
				'type'           => 'VARCHAR',
				'constraint'     => '8',
			],
			'nama' 				 => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'prodi'				 => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '50',
			],
			'jenis_klamin'		 => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '20',
			],
			'alamat'		 	 => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '250',
			],

		]);
		$this->forge->addKey('id_mahasiswa', true);
		$this->forge->createTable('mahasiswa');
	}

	public function down()
	{
		$this->forge->dropTable('mahasiswa');
	}
}
