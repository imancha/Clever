<?php

include_once('model.visitor.php');

class Cart
{
	private $connect;
	private $table = 'Cart';

	private $id;
	private $visitor;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->connect = $connect;
		$this->visitor = new Visitor($connect);
		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES(:id,:id_visitor)";
		$res = $this->connect->prepare($sql);

		$id_visitor = $this->visitor->getId();

		$res->bindParam(":id", $this->id, PDO::PARAM_INT);
		$res->bindParam(":id_visitor", $id_visitor, PDO::PARAM_INT);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function show($id)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID`=:id";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function selectVisitor()
	{
		return $this->visitor->select();
	}

	public function showVisitorWarehouse($id_warehouse)
	{
		return $this->visitor->showWarehouse($id_warehouse);
	}

	public function setIdVisitor($id_visitor)
	{
		return $this->visitor->setId($id_visitor);
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
