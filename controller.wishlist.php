<?php

include_once('database.php');
include_once('model.stock.php');

class WishlistController
{
	public function index()
	{
		$connect = Database::connect();
		$stock = new Stock($connect);
		$data = [];

		foreach($_SESSION['imancha']['wishlist'] as $cart)
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

		foreach($_SESSION['imancha']['wishlist'] as $cart)
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
			$_SESSION['imancha']['wishlist'][$idx-1] = array('id'=>$_GET['item'],'qty'=>$qty+1);
		else
			$_SESSION['imancha']['wishlist'][] = array('id'=>$_GET['item'],'qty'=>1);
	}

	public function update()
	{
		$i = 0;

		foreach($_SESSION['imancha']['wishlist'] as $cart)
		{
			$i++;
			if($cart['id'] == $_GET['item'])
			{
				$idx = $i;
				$qty = $cart['qty'];

				if($qty-1 < 1)
				{
					header('Location: ./?wishlist=remove&item='.$cart['id']);
					exit();
				}
			}
		}
		$_SESSION['imancha']['wishlist'][$idx-1] = array('id'=>$_GET['item'],'qty'=>$qty-1);
	}

	public function remove()
	{
		foreach($_SESSION['imancha']['wishlist'] as $cart)
		{
			if($cart['id'] != $_GET['item'])
			{
				$cart_['cart_'][] = array('id'=>$cart['id'],'qty'=>$cart['qty']);
			}
		}
		$_SESSION['imancha']['wishlist'] = $cart_['cart_'];
	}
}
