<?php

include_once('model.php');
include_once('model.book.php');
include_once('model.category.detail.php');

class BookCategory extends Model
{
	private $book;
	private $category_detail;

	public function __construct($connect = null)
	{
		$this->table = 'Book Category';
		$this->connect = $connect;
		$this->book = new Book($connect);
		$this->category_detail = new CategoryDetail($connect);
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id_book,:id_category_detail)";
		$res = $this->connect->prepare($sql);

		$id_book = $this->book->getId();
		$id_category_detail = $this->category_detail->getId();

		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);
		$res->bindParam(":id_category_detail", $id_category_detail, PDO::PARAM_INT);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function getBookCategory()
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Book` = :id_book";
		$res = $this->connect->prepare($sql);

		$id_book = $this->book->getId();

		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function showCategoryDetail($id_category_detail)
	{
		return $this->category_detail->get($id_category_detail);
	}

	public function setIdBook($id)
	{
		$this->book->setId($id);
	}

	public function setIdCategoryDetail($id)
	{
		$this->category_detail->setId($id);
	}

}
