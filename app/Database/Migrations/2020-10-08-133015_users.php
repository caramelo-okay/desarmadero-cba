<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		//Deshabilita comprobacion de claves foraneas, suele dar problemas al hacer la migracion si existen claves foraneas
        //$this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
            'id'=> [
				'type'			 => 'INT',
				'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        	],
            
            'name' => [
                'type'           => 'VARCHAR',
				'constraint'     => 255,
				'null'           => true,
			],
			
			'email' => [
                'type'           => 'VARCHAR',
				'constraint'     => 255,
				'null'           => true,
			],
			
			
			//Timestamp utilizadops por el modelo
            'created_at' => [
				'type' 	 => 'datetime',
				'null'   => true,
			],
			'updated_at' => [
				'type'   => 'datetime',
				'null'   => true,
			],
			'deleted_at' => [
				'type' => 'datetime',
				'null' => true,
			],

		]);
		
		//Clave primaria
		$this->forge->addPrimaryKey('id');
        $this->forge->createTable('users', TRUE); //segundo parametro TRUE crea si no existe la tabla if not exist
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
