<?php

class Warehouse
{
	private $connect;
	private $table = 'Warehouse';

	private $id;
	private $name;

	public function __construct($connect = null)
	{
		$this->connect = $connect;
	}

	public function show($id)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID` = :id LIMIT 1";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

}
