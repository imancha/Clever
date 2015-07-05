<?php

include_once('model.php');
include_once('model.book.php');
include_once('model.cart.php');

class CartItem extends Model
{
	private $cart;
	private $book;
	private $quantity;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->table = 'Cart Item';
		$this->connect = $connect;
		$this->cart = new Cart($connect);
		$this->book = new Book($connect);

		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES(:id_cart,:id_book,:quantity)";
		$res = $this->connect->prepare($sql);

		$id_cart = $this->cart->getId();
		$id_book = $this->book->getId();

		$res->bindParam(":id_cart", $id_cart, PDO::PARAM_INT);
		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);
		$res->bindParam(":quantity", $this->quantity, PDO::PARAM_INT);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function show($id_cart)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Cart`=:id_cart";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id_cart", $id_cart, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function selectCartVisitor()
	{
		return $this->cart->selectVisitor();
	}

	public function showCartVisitorWarehouse($id_warehouse)
	{
		return $this->cart->showVisitorWarehouse($id_warehouse);
	}

	public function showBook($id_book)
	{
		return $this->book->show($id_book);
	}

	public function setIdCart($id_cart)
	{
		$this->cart->setId($id_cart);
	}

	public function setIdBook($id_book)
	{
		$this->book->setId($id_book);
	}

}
