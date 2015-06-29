<?php

class Book
{
	private $connect;
	private $table = 'Book';

	private $id;
	private $title;
	private $subtitle;
	private $description;
	private $isbn;
	private $page;
	private $year;
	private $publisher;
	private $language;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->connect = $connect;
		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
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
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID`=:id";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` ORDER BY `Title` ASC";
		$res = $this->connect->prepare($sql);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id,:title,:subtitle,:description,:isbn,:page,:year,:publisher,:language)";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $this->id, PDO::PARAM_INT);
		$res->bindParam(":title", $this->title, PDO::PARAM_STR);
		$res->bindParam(":subtitle", $this->subtitle, PDO::PARAM_STR);
		$res->bindParam(":description", $this->description, PDO::PARAM_STR);
		$res->bindParam(":isbn", $this->isbn, PDO::PARAM_STR);
		$res->bindParam(":page", $this->page, PDO::PARAM_INT);
		$res->bindParam(":year", $this->year, PDO::PARAM_STR);
		$res->bindParam(":publisher", $this->publisher, PDO::PARAM_STR);
		$res->bindParam(":language", $this->language, PDO::PARAM_STR);

		if($res->execute())
			return true;

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM `".$this->table."` WHERE `ID` = :id";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		if($res->execute())
			return true;

		return false;
	}
}
