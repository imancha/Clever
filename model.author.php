<?php

include_once('model.php');

class Author extends Model
{
	private $id;
	private $name;

	public function __construct($connect = null)
	{
		$this->table = 'Author';
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

	public function setName($name)
	{
		$this->name = $name;
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id,:name)";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $this->id, PDO::PARAM_INT);
		$res->bindParam(":name", $this->name, PDO::PARAM_STR);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function show($id)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID` = :id LIMIT 1";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function check($name)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE LOWER(`Name`) = LOWER(:name) LIMIT 1";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":name", $name, PDO::PARAM_STR);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

}
