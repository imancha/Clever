<?php

class Category
{
	private $connect;
	private $table = 'Category';

	private $id;
	private $name;

	public function __construct($connect, Array $prop = [])
	{
		$this->connect = $connect;
		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` ORDER BY `Name` ASC";
		$res = $this->connect->prepare($sql);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
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

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

}
