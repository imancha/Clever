<?php

include_once('model.php');

class Warehouse extends Model
{
	private $id;
	private $name;

	public function __construct($connect = null)
	{
		$this->table = 'Warehouse';
		$this->connect = $connect;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function show($id)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID` = :id LIMIT 1";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

}
