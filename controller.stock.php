<?php

include_once('database.php');
include_once('model.stock.php');

class StockController
{
	public function counts($id_warehouse)
	{
		$connect = Database::connect();
		$stock = new Stock($connect);
		$_stock = $stock->selectBook($id_warehouse);
		$__stock = $_stock->rowCount();

		Database::disconnect();

		return $__stock;
	}

	public function select($start,$end,$id_warehouse)
	{
		$connect = Database::connect();
		$stock = new Stock($connect);
		$_stock = $stock->getBook($start,$end,$id_warehouse);
		$data = [];

		if($_stock->rowCount() > 0)
		{
			while($row = $_stock->fetch(PDO::FETCH_ASSOC))
			{
				$_book = $stock->showBook($row['ID Book']);

				if($_book->rowCount() == 1)
				{
					$_row = $_book->fetch(PDO::FETCH_ASSOC);
				}

				$data[] = [
					'stock' => $row['Stock'],
					'price' => $row['Price'],
					'id' => $_row['ID'],
					'title' => $_row['Title'],
					'subtitle' => $_row['SubTitle'],
					'desc' => $_row['Description'],
					'isbn' => $_row['ISBN'],
					'page' => $_row['Page'],
					'year' => $_row['Year'],
					'publisher' => $_row['Publisher'],
					'language' => $_row['Language']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}
}
