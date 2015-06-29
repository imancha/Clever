<?php

include_once('database.php');
include_once('model.cart.php');
include_once('model.cart.item.php');
include_once('model.dispatch.php');
include_once('model.order.php');
include_once('model.stock.php');

class OrderController
{
	public function customer()
	{
		$connect = Database::connect();
		$dispatch = new Dispatch($connect);
		$customer = $dispatch->selectOrderCustomer();
		$data = [];

		if($customer->rowCount() > 0)
		{
			while($row = $customer->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = [
					'id' 			=> $row['ID'],
					'first'		=> $row['First Name'],
					'last' 		=> $row['Last Name'],
					'email'		=> $row['Email'],
					'phone'		=> $row['Phone'],
					'company' => $row['Company'],
					'address' => $row['Address'],
					'city'		=> $row['City'],
					'post'		=> $row['Post Code'],
					'state'		=> $row['State'],
					'country'	=> $row['Country']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function order()
	{
		$connect = Database::connect();
		$dispatch = new Dispatch($connect);
		$_order = $dispatch->selectOrder();
		$data = [];

		if($_order->rowCount() > 0)
		{
			while($row = $_order->fetch(PDO::FETCH_ASSOC))
			{
				$_customer = $dispatch->showOrderCustomer($row['ID Customer']);

				if($_customer->rowCount() == 1)
				{
					$_row = $_customer->fetch(PDO::FETCH_ASSOC);
				}

				$dispatch->setIdOrder($row['ID Order']);
				$_dispatch = $dispatch->show();

				if($_dispatch->rowCount() == 1)
				{
					$__row = $_dispatch->fetch(PDO::FETCH_ASSOC);
				}

				$_payment_method = $dispatch->showPaymentMethod($__row['ID Payment Method']);

				if($_payment_method->rowCount() == 1)
				{
					$___row = $_payment_method->fetch(PDO::FETCH_ASSOC);
				}

				$_shipping_method = $dispatch->showShippingMethod($__row['ID Shipping Method']);

				if($_shipping_method->rowCount() == 1)
				{
					$____row = $_shipping_method->fetch(PDO::FETCH_ASSOC);
				}

				$data[] = [
					'id' 				=> $row['ID Order'],
					'date' 			=> $row['Date'],
					'message'		=> $row['Message'],
					'cart'			=> $row['ID Cart'],
					'total'			=> $row['Total'],
					'first'			=> $_row['First Name'],
					'last'			=> $_row['Last Name'],
					'status'		=> $__row['Status'],
					'payment'		=> $___row['Name'],
					'shipping'	=> $____row['Name']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function shippingMethod($id_warehouse)
	{
		$connect = Database::connect();
		$shipping = new Dispatch($connect);
		$shipping->setIdWarehouseShipping($id_warehouse);
		$_shipping = $shipping->selectShippingMethod();
		$data = [];

		if($_shipping->rowCount() > 0)
		{
			while($row = $_shipping->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = [
					'id' => $row['ID'],
					'name' => $row['Name'],
					'description' => $row['Description'],
					'cost' => $row['Cost'],
					'estimate' => $row['Estimate']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function paymentMethod($id_warehouse)
	{
		$connect = Database::connect();
		$payment = new Dispatch($connect);
		$payment->setIdWarehousePayment($id_warehouse);
		$_payment = $payment->selectPaymentMethod();
		$data = [];

		if($_payment->rowCount() > 0)
		{
			while($row = $_payment->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = [
					'id' => $row['ID'],
					'name' => $row['Name'],
					'description' => $row['Description'],
					'account' => $row['Account']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function store()
	{
		session_start();
		$connect = Database::connect();
		$cart = new Cart($connect,[
			'id' => 'NULL',
		]);

		$cart->setIdVisitor($_SESSION['imancha']['id']);

		$error = false;
		if($cart->insert())
		{
			$id = $connect->lastInsertId();

			foreach($_SESSION['imancha']['cart'] as $cart)
			{
				$cart_item = new CartItem($connect,[
					'quantity' => $cart['qty']
				]);
				$cart_item->setIdCart($id);
				$cart_item->setIdBook($cart['id']);

				if(!$cart_item->insert())
				{
					$error = true;
				}
			}
		}
		else
		{
			$error = true;
		}

		$customer = new Customer($connect,[
			'id' => 'NULL',
			'first_name' => $_REQUEST['a'],
			'last_name' => $_REQUEST['b'],
			'email' => $_REQUEST['c'],
			'phone' => $_REQUEST['d'],
			'company' => $_REQUEST['e'],
			'address' => $_REQUEST['f'],
			'city' => $_REQUEST['g'],
			'post_code' => $_REQUEST['h'],
			'state' => $_REQUEST['i'],
			'country' => $_REQUEST['j']
		]);

		if($customer->insert())
		{
			$_id = $connect->lastInsertId();
		}
		else
		{
			$error = true;
		}

		$stock = new Stock($connect);
		$total = 0;

		foreach($_SESSION['imancha']['cart'] as $cart)
		{
			$_stock = $stock->selectBook($_SESSION['imancha']['region'],$cart['id']);

			if($_stock->rowCount() == 1)
			{
				$row = $_stock->fetch(PDO::FETCH_ASSOC);
				$total += $row['Price']*$cart['qty'];
			}
			else
			{
				$error = true;
			}
		}

		$order = new Order($connect,[
			'id_order' => 'NULL',
			'date' => date("Y-m-d H:i:s"),
			'message' => $_REQUEST['s'],
			'total' => $total
		]);

		$order->setIdCustomer($_id);
		$order->setIdCart($id);

		if($order->insert())
		{
			$__id = $connect->lastInsertId();
		}
		else
		{
			$error = true;
		}

		$dispatch = new Dispatch($connect,[
			'id' => 'NULL',
			'status' => 'Packing'
		]);

		$dispatch->setIdOrder($__id);
		$dispatch->setIdWarehouse($_SESSION['imancha']['region']);
		$dispatch->setIdShippingMethod($_REQUEST['q']);
		$dispatch->setIdPaymentMethod($_REQUEST['r']);

		if(!$dispatch->insert())
		{
			$error = true;
		}

		if($error)
		{
			print "Oops, Change a few things up and try submitting again.";
		}
		else
		{
			$_SESSION['imancha']['cart'] = array();
			print "OK";
		}

		Database::disconnect();
	}

	public function update()
	{
		$connect = Database::connect();
		$dispatch = new Dispatch($connect,[
			'status' => $_POST['status']
		]);
		$dispatch->setIdOrder($_POST['id']);
		$_dispatch = $dispatch->update();
		Database::disconnect();

		return $_dispatch;
	}
}
