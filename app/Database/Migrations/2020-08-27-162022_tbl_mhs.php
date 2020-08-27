<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblMhs extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'mhs_id'          => [
							'type'           => 'INT',
							'constraint'     => 11,
							'unsigned'       => TRUE,
							'auto_increment' => TRUE
					],
					'mhs_name'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '255'
					],
					'mhs_nim' => [
							'type'           => 'VARCHAR',
							'constraint'     => '255'							
					],
					'mhs_majors' => [
							'type'           => 'VARCHAR',
							'constraint'     => '255'							
					],
					'mhs_thesis' => [
							'type'           => 'VARCHAR',
							'constraint'     => '255'							
						],
						'mhs_thesis_registered' => [
							'type'           => 'VARCHAR',									
							'constraint'     => '2'							
					],
					'created_at' => [
							'type' => 'DATETIME',
							'null' => TRUE
					],
					'updated_at' => [
							'type' => 'DATETIME',
							'null' => TRUE
					],
					'mhs_slug' => [
							'type' => 'VARCHAR',
							'constraint'     => '255'
					]
			]);
			$this->forge->addKey('mhs_id', true);
			$this->forge->createTable('tbl_mhs');
	}

	public function down()
	{
			$this->forge->dropTable('tbl_mhs');
	}
}
