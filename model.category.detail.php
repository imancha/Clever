<?php

include_once('model.php');
include_once('model.category.php');

class CategoryDetail extends Model
{
	private $id;
	private $name;
	private $category;

	public function __construct($connect = null)
	{
		$this->table = 'Category Detail';
		$this->connect = $connect;
		$this->category = new Category($connect);
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` ORDER BY `Name` ASC";
		$res = $this->connect->prepare($sql);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function show()
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Category`=:id_category";
		$res = $this->connect->prepare($sql);

		$id_category = $this->category->getId();

		$res->bindParam(":id", $id_category, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function get($id)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID`=:id";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function setIdCategory($id_category)
	{
		return $this->category->setId($id_category);
	}

	public function selectCategory()
	{
		return $this->category->select();
	}

}
