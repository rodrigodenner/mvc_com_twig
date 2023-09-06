<?php

namespace app\models;



abstract class Model {

	protected $connection;
	protected $table;
	
	public function __construct() {
		$this->connection = Connection::connect();
	}
		
	public function all() {
		$sql = " SELECT * FROM {$this->table} ";
		$list = $this->connection->query($sql);
		$list->execute();

		return $list->fetchAll();
	}
	public function find($id) {
		$sql = "SELECT * FROM {$this->table} WHERE id = :id";
		$list = $this->connection->prepare($sql);
		$list->bindValue(':id', $id, \PDO::PARAM_INT);
		$list->execute();
	
		return $list->fetch();
	}
	

}