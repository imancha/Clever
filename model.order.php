<?php

include_once('model.php');
include_once('model.customer.php');
include_once('model.cart.php');

class Order extends Model
{
	private $id_order;
	private $customer;
	private $date;
	private $message;
	private $cart;
	private $total;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->table = 'Order';
		$this->connect = $connect;
		$this->customer = new Customer($connect);
		$this->cart = new Cart($connect);

		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
	}

	public function setId($id_order)
	{
		$this->id_order = $id_order;
	}

	public function getId()
	{
		return $this->id_order;
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id_order,:id_customer,:date,:message,:id_cart,:total)";
		$res = $this->connect->prepare($sql);

		$id_customer = $this->customer->getId();
		$id_cart = $this->cart->getId();

		$res->bindParam(":id_order", $this->id_order, PDO::PARAM_INT);
		$res->bindParam(":id_customer", $id_customer, PDO::PARAM_INT);
		$res->bindParam(":date", $this->date, PDO::PARAM_STR);
		$res->bindParam(":message", $this->message, PDO::PARAM_STR);
		$res->bindParam(":id_cart", $id_cart, PDO::PARAM_INT);
		$res->bindParam(":total", $this->total, PDO::PARAM_STR);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` ORDER BY `Date` DESC";
		$res = $this->connect->prepare($sql);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function selectCustomer()
	{
		return $this->customer->select();
	}

	public function showCustomer($id_customer)
	{
		return $this->customer->show($id_customer);
	}

	public function setIdCart($id_cart)
	{
		return $this->cart->setId($id_cart);
	}

	public function setIdCustomer($id_customer)
	{
		return $this->customer->setId($id_customer);
	}

}
