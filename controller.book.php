<?php

include_once('database.php');
include_once('model.author.php');
include_once('model.book.php');
include_once('model.book.author.php');
include_once('model.book.category.php');
include_once('model.category.detail.php');
include_once('model.stock.php');

class BookController
{
	public function index($id_book = NULL)
	{
		$connect = Database::connect();
		$book_author = new BookAuthor($connect);
		$book = empty($id_book) ? $book_author->selectBook() : $book_author->showBook($id_book);
		$data = [];

		if($book->rowCount() > 0)
		{
			$stock = new Stock($connect);

			while($row = $book->fetch(PDO::FETCH_ASSOC))
			{
				$_stock = $stock->show($row['ID']);

				if($_stock->rowCount() == 1)
					$_row = $_stock->fetch(PDO::FETCH_ASSOC);

				$_warehouse = $stock->showWarehouse($_row['ID Warehouse']);

				if($_warehouse->rowCount() == 1)
					$__row = $_warehouse->fetch(PDO::FETCH_ASSOC);

				$_book_author = $book_author->show($row['ID']);

				if($_book_author->rowCount() > 0)
				{
					$_author = [];
					while($___row = $_book_author->fetch(PDO::FETCH_ASSOC))
					{
						$author = $book_author->showAuthor($___row['ID Author']);

						if($author->rowCount() == 1)
						{
							$____row = $author->fetch(PDO::FETCH_ASSOC);
							$_author[] = $____row['Name'];
						}
					}
				}

				$data[] = [
					'id' 					=> $row['ID'],
					'title'				=> $row['Title'],
					'subtitle'		=> $row['SubTitle'],
					'publisher'		=> $row['Publisher'],
					'isbn'				=> $row['ISBN'],
					'description'	=> $row['Description'],
					'page'				=> $row['Page'],
					'year'				=> $row['Year'],
					'language'		=> $row['Language'],
					'price' 			=> $_row['Price'],
					'stock'				=> $_row['Stock'],
					'warehouse'		=> $__row['Name'],
					'author'			=> implode(',',$_author)
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function store()
	{
		$connect = Database::connect();
		$book = new Book($connect,[
			'id'					=> 'NULL',
			'title'				=> $_POST['title'],
			'subtitle'		=> $_POST['subtitle'],
			'description'	=> $_POST['description'],
			'isbn'				=> $_POST['isbn'],
			'page'				=> $_POST['page'],
			'year'				=> $_POST['year'],
			'publisher'		=> $_POST['publisher'],
			'language'		=> $_POST['language']
		]);

		if($book->insert())
		{
			$book_id = $connect->lastInsertId();
			$book_category = new BookCategory($connect);
			$book_category->setIdBook($book_id);

			foreach($_POST['category'] as $val)
			{
				$book_category->setIdCategoryDetail($val);
				$book_category->insert();
			}

			$stock = new Stock($connect);
			$stock->setIdBook($book_id);

			foreach($_POST['warehouse'] as $val)
			{
				$stock->setIdWarehouse($val);
				$stock->setStock($_POST['stock'.$val]);
				$stock->setPrice($_POST['price'.$val]);
				$stock->insert();
			}

			$author = new Author($connect);
			$book_author = new BookAuthor($connect);
			$book_author->setIdBook($book_id);

			foreach(explode(',',($_POST['author'])) as $val)
			{
				$_author = $author->check($val);

				if($_author->rowCount() == 1)
				{
					$row = $_author->fetch(PDO::FETCH_ASSOC);
					$author_id = $row['ID'];
				}
				else
				{
					$author->setId('NULL');
					$author->setName($val);
					$author->insert();
					$author_id = $connect->lastInsertId();
				}

				$book_author->setIdAuthor($author_id);
				$book_author->insert();
			}

			$target_dir = "../public/images/cover/";
			$target_file = $target_dir . basename($_FILES["cover"]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$target_file = $target_dir.$_POST['title'].'.'.$imageFileType;

			if(getimagesize($_FILES["cover"]["tmp_name"]) !== false)
			{
				$uploadOk = 1;
			}
			else
			{
				$uploadOk = 0;

				echo '<div class="alert alert-warning">
									<button class="close" type="button" data-dismiss="alert">x</button>
									<strong>Oh snap! </strong>
									File is not an image.
								</div>';
			}

			if($_FILES["cover"]["size"] > 500000)
			{
				$uploadOk = 0;

				echo '<div class="alert alert-warning">
									<button class="close" type="button" data-dismiss="alert">x</button>
									<strong>Oh snap! </strong>
									Sorry, your file is too large.
								</div>';
			}

			if($imageFileType != "png")
			{
				$uploadOk = 0;

				echo '<div class="alert alert-warning">
									<button class="close" type="button" data-dismiss="alert">x</button>
									<strong>Oh snap! </strong>
									Sorry, only PNG files are allowed.
								</div>';
			}

			if($uploadOk != 0)
			{
				if(!move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file))
				{
					echo '<div class="alert alert-warning">
									<button class="close" type="button" data-dismiss="alert">x</button>
									<strong>Oh snap! </strong>
									Sorry, there was an error uploading your file.
								</div>';
				}
			}

			return true;
		}

		Database::disconnect();

		return false;
	}

	public function delete($id)
	{
		$connect = Database::connect();
		$book = new Book($connect);
		$_book = $book->delete($id);
		Database::disconnect();

		return $_book;
	}

	public function getCategoryDetail()
	{
		$connect = Database::connect();
		$category_detail = new CategoryDetail($connect);
		$data = $category_detail->select();
		$_data = [];

		if($data->rowCount() > 0)
		{
			while($row = $data->fetch(PDO::FETCH_ASSOC))
			{
				$_data[] = [
					'id'		=> $row['ID'],
					'name'	=> $row['Name']
				];
			}
		}

		Database::disconnect();

		return json_encode($_data);
	}

	public function showCategory()
	{
		$connect = Database::connect();
		$category = new CategoryDetail($connect);
		$_category = $category->selectCategory();
		$data = [];

		if($_category->rowCount() > 0)
		{
			while($row = $_category->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = [
					'id'		=> $row['ID'],
					'name'	=> $row['Name']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function getTags($id_book)
	{
		$connect = Database::connect();
		$tags = new BookCategory($connect);
		$tags->setIdBook($id_book);
		$_tags = $tags->getBookCategory();
		$data = [];

		if($_tags->rowCount() > 0)
		{
			while($row = $_tags->fetch(PDO::FETCH_ASSOC))
			{
				$__tags = $tags->showCategoryDetail($row['ID Category Detail']);

				if($__tags->rowCount() == 1)
				{
					$_row = $__tags->fetch(PDO::FETCH_ASSOC);

					$data[] = [
						'id'		=> $_row['ID'],
						'name'	=> $_row['Name']
					];
				}
			}
		}

		Database::disconnect();

		return json_encode($data);
	}
}
