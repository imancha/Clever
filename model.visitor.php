<?php

include_once('model.php');
include_once('model.warehouse.php');

class Visitor extends Model
{
	private $id;
	private $warehouse;
	private $name;
	private $datetime;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->table = 'Visitor';
		$this->connect = $connect;
		$this->warehouse = new Warehouse($connect);

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

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES(:id,:id_warehouse,:name,:datetime)";
		$res = $this->connect->prepare($sql);

		$id_warehouse = $this->warehouse->getId();

		$res->bindParam(":id", $this->id, PDO::PARAM_INT);
		$res->bindParam(":id_warehouse", $id_warehouse, PDO::PARAM_INT);
		$res->bindParam(":name", $this->name, PDO::PARAM_STR);
		$res->bindParam(":datetime", $this->datetime, PDO::PARAM_STR);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` ORDER BY `Datetime` DESC";
		$res = $this->connect->prepare($sql);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function showWarehouse($id_warehouse)
	{
		return $this->warehouse->show($id_warehouse);
	}

	public function setIdWarehouse($id_warehouse)
	{
		return $this->warehouse->setId($id_warehouse);
	}

}
