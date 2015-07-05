<?php

include_once('model.php');
include_once('model.order.php');
include_once('model.payment.method.php');
include_once('model.shipping.method.php');

class Dispatch extends Model
{
	private $id;
	private $order;
	private $warehouse;
	private $shipping_method;
	private $payment_method;
	private $status;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->table = 'Dispatch';
		$this->connect = $connect;
		$this->order = new Order($connect);
		$this->warehouse = new Warehouse($connect);
		$this->payment_method = new PaymentMethod($connect);
		$this->shipping_method = new ShippingMethod($connect);

		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id,:id_order,:id_warehouse,:id_shipping_method,:id_payment_method,:status)";
		$res = $this->connect->prepare($sql);

		$id_order = $this->order->getId();
		$id_warehouse = $this->warehouse->getId();
		$id_shipping_method = $this->shipping_method->getId();
		$id_payment_method = $this->payment_method->getId();

		$res->bindParam(":id", $this->id, PDO::PARAM_INT);
		$res->bindParam(":id_order", $id_order, PDO::PARAM_INT);
		$res->bindParam(":id_warehouse", $id_warehouse, PDO::PARAM_INT);
		$res->bindParam(":id_shipping_method", $id_shipping_method, PDO::PARAM_INT);
		$res->bindParam(":id_payment_method", $id_payment_method, PDO::PARAM_INT);
		$res->bindParam(":status", $this->status, PDO::PARAM_STR);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function show()
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Order`=:id_order";
		$res = $this->connect->prepare($sql);

		$id_order = $this->order->getId();

		$res->bindParam(":id_order", $id_order, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function update()
	{
		$sql = "UPDATE `".$this->table."` SET `Status`=:status WHERE `ID Order`=:id_order";
		$res = $this->connect->prepare($sql);

		$id_order = $this->order->getId();

		$res->bindParam(":status", $this->status, PDO::PARAM_STR);
		$res->bindParam(":id_order", $id_order, PDO::PARAM_INT);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function setIdOrder($id_order)
	{
		return $this->order->setId($id_order);
	}

	public function setIdWarehouse($id_warehouse)
	{
		return $this->warehouse->setId($id_warehouse);
	}

	public function setIdPaymentMethod($id_payment_method)
	{
		return $this->payment_method->setId($id_payment_method);
	}

	public function setIdShippingMethod($id_shipping_method)
	{
		return $this->shipping_method->setId($id_shipping_method);
	}

	public function setIdWarehouseShipping($id_warehouse)
	{
		return $this->shipping_method->setIdWarehouse($id_warehouse);
	}

	public function setIdWarehousePayment($id_warehouse)
	{
		return $this->payment_method->setIdWarehouse($id_warehouse);
	}

	public function selectOrder()
	{
		return $this->order->select();
	}

	public function selectOrderCustomer()
	{
		return $this->order->selectCustomer();
	}

	public function selectPaymentMethod()
	{
		return $this->payment_method->select();
	}

	public function selectShippingMethod()
	{
		return $this->shipping_method->select();
	}

	public function showOrderCustomer($id_customer)
	{
		return $this->order->showCustomer($id_customer);
	}

	public function showPaymentMethod($id_payment_method)
	{
		return $this->payment_method->show($id_payment_method);
	}

	public function showShippingMethod($id_shipping_method)
	{
		return $this->shipping_method->show($id_shipping_method);
	}

}
