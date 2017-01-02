<?php

class m170101_164813_create_tree extends CDbMigration
{
	public function up()
	{

		$this->createTable('tree',[
				'id' => 'pk',
				'name' => 'string',
				'parent_id' => 'int'
		]);
		$this->addForeignKey('FK_parent','tree','parent_id', 'tree' ,'id');
		$this->insert('tree',['id' => '1',
			'name' => 'root'
		]);
		$this->update('tree',['id' => '0'],['id' => '1']);

		$this->insert('tree',['id' => '2', 'name' => 'group1', 'parent_id' => '0']);
		$this->insert('tree',['id' => '3', 'name' => 'group2', 'parent_id' => '2']);
		$this->insert('tree',['id' => '4', 'name' => 'group3', 'parent_id' => '3']);
		$this->insert('tree',['id' => '5', 'name' => 'group4', 'parent_id' => '4']);
		$this->insert('tree',['id' => '6', 'name' => 'group5', 'parent_id' => '0']);
		$this->insert('tree',['id' => '7', 'name' => 'group6', 'parent_id' => '6']);
		$this->insert('tree',['id' => '8', 'name' => 'group7', 'parent_id' => '7']);
	}

	public function down()
	{
		$this->dropTable('tree');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}