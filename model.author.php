<?php

class Author
{
	private $connect;
	private $table = 'Author';

	private $id;
	private $name;

	public function __construct($connect = null)
	{
		$this->connect = $connect;
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id,:name)";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $this->id, PDO::PARAM_INT);
		$res->bindParam(":name", $this->name, PDO::PARAM_STR);

		if($res->execute())
			return true;

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

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getId()
	{
		return $this->id;
	}
}
