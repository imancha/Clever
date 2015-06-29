<?php

include_once('model.warehouse.php');

class ShippingMethod
{
	private $connect;
	private $table = 'Shipping Method';

	private $id;
	private $warehouse;
	private $name;
	private $description;
	private $cost;
	private $estimate;

	public function __construct($connect = null)
	{
		$this->connect = $connect;
		$this->warehouse = new Warehouse($connect);
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Warehouse` = :id_warehouse ORDER BY `Cost` ASC";
		$res = $this->connect->prepare($sql);

		$id_warehouse = $this->warehouse->getId();

		$res->bindParam(":id_warehouse", $id_warehouse, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function show($id)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID`=:id";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function setIdWarehouse($id_warehouse)
	{
		return $this->warehouse->setId($id_warehouse);
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
