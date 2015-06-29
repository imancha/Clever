<?php

include_once('model.book.php');
include_once('model.warehouse.php');

class Stock
{
	private $connect;
	private $table = 'Stock';

	private $warehouse;
	private $book;
	private $stock;
	private $price;

	public function __construct($connect = null)
	{
		$this->connect = $connect;
		$this->book = new Book($connect);
		$this->warehouse = new Warehouse($connect);
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id_warehouse,:id_book,:stock,:price)";
		$res = $this->connect->prepare($sql);

		$id_warehouse = $this->warehouse->getId();
		$id_book = $this->book->getId();

		$res->bindParam(":id_warehouse", $id_warehouse, PDO::PARAM_INT);
		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);
		$res->bindParam(":stock", $this->stock, PDO::PARAM_INT);
		$res->bindParam(":price", $this->price, PDO::PARAM_STR);

		if($res->execute())
			return true;

		return false;
	}

	public function show($id_book)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Book` = :id_book LIMIT 1";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function selectBook($id_warehouse, $id_book = NULL)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Warehouse`=:id_warehouse".(empty($id_book) ? '' : ' AND `ID Book`=:id_book');
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id_warehouse", $id_warehouse, PDO::PARAM_INT);
		empty($id_book) ? '' : $res->bindParam(":id_book", $id_book, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function getBook($start,$end,$id_warehouse)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Warehouse`=:id_warehouse ORDER BY `ID Book` DESC LIMIT :start,:end";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":start", $start, PDO::PARAM_INT);
		$res->bindParam(":end", $end, PDO::PARAM_INT);
		$res->bindParam(":id_warehouse", $id_warehouse, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function showBook($id_book)
	{
		return $this->book->show($id_book);
	}

	public function showWarehouse($id_warehouse)
	{
		return $this->warehouse->show($id_warehouse);
	}

	public function setIdWarehouse($id)
	{
		$this->warehouse->setId($id);
	}

	public function setIdBook($id)
	{
		$this->book->setId($id);
	}

	public function setStock($stock)
	{
		$this->stock = $stock;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

}
