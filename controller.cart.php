<?php

include_once('database.php');
include_once('model.cart.item.php');
include_once('model.stock.php');
include_once('model.visitor.php');

class CartController
{
	public function index()
	{
		$connect = Database::connect();
		$stock = new Stock($connect);
		$data = [];

		foreach($_SESSION['imancha']['cart'] as $cart)
		{
			$_stock = $stock->selectBook($_SESSION['imancha']['region'], $cart['id']);

			if($_stock->rowCount() == 1)
			{
				$row = $_stock->fetch(PDO::FETCH_ASSOC);

				$data[] = [
					'id' => $row['ID Book'],
					'stock' => $row['Stock'],
					'price' => $row['Price'],
					'qty' => $cart['qty']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function insert()
	{
		$add = FALSE;
		$i = 0;

		foreach($_SESSION['imancha']['cart'] as $cart)
		{
			$i++;
			if($cart['id'] == $_GET['item'])
			{
				$add = TRUE;
				$idx = $i;
				$qty = $cart['qty'];
			}
		}

		if($add)
			$_SESSION['imancha']['cart'][$idx-1] = array('id'=>$_GET['item'],'qty'=>$qty+1);
		else
			$_SESSION['imancha']['cart'][] = array('id'=>$_GET['item'],'qty'=>1);
	}

	public function update()
	{
		$i = 0;

		foreach($_SESSION['imancha']['cart'] as $cart)
		{
			$i++;

			if($cart['id'] == $_GET['item'])
			{
				$idx = $i;
				$qty = $cart['qty'];

				if($qty-1 < 1)
				{
					header('Location: ./?cart=remove&item='.$cart['id']);
					exit();
				}
			}
		}

		$_SESSION['imancha']['cart'][$idx-1] = array('id'=>$_GET['item'],'qty'=>$qty-1);
	}

	public function remove()
	{
		if(count($_SESSION['imancha']['cart']) == 1)
		{
			$_SESSION['imancha']['cart'] = array();
		}
		else
		{
			foreach($_SESSION['imancha']['cart'] as $cart)
			{
				if($cart['id'] != $_GET['item'])
				{
					$cart_['cart_'][] = array('id'=>$cart['id'],'qty'=>$cart['qty']);
				}
			}
			$_SESSION['imancha']['cart'] = $cart_['cart_'];
		}
	}

	public function show($id)
	{
		$connect = Database::connect();
		$cart = new CartItem($connect);
		$_cart = $cart->show($id);
		$data = [];

		if($_cart->rowCount() > 0)
		{
			while($row = $_cart->fetch(PDO::FETCH_ASSOC))
			{
				$book = $cart->showBook($row['ID Book']);

				if($book->rowCount() == 1)
				{
					$_row = $book->fetch(PDO::FETCH_ASSOC);
				}

				$data[] = [
					'quantity'	=> $row['Quantity'],
					'item'			=> $_row['Title']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function visitor()
	{
		$connect = Database::connect();
		$visitor = new CartItem($connect);
		$_visitor = $visitor->selectCartVisitor();
		$data = [];

		if($_visitor->rowCount() > 0)
		{
			while($row = $_visitor->fetch(PDO::FETCH_ASSOC))
			{
				$_warehouse = $visitor->showCartVisitorWarehouse($row['ID Warehouse']);

				if($_warehouse->rowCount() == 1)
				{
					$_row = $_warehouse->fetch(PDO::FETCH_ASSOC);
				}

				$data[] = [
					'name'			=> $row['Name'],
					'datetime'	=> $row['Datetime'],
					'warehouse'	=> $_row['Name']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function storeVisitor()
	{
		$connect = Database::connect();
		$visitor = new Visitor($connect,[
			'id' => 'NULL',
			'name' => $_SERVER['REMOTE_ADDR'],
			'datetime' => date("Y-m-d H:i:s")
		]);
		$visitor->setIdWarehouse($_SESSION['imancha']['region']);
		$id = NULL;
		if($visitor->insert())
		{
			$id = $connect->lastInsertId();
		}

		Database::disconnect();

		return $id;
	}
}
