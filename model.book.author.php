<?php

include_once('model.php');
include_once('model.book.php');
include_once('model.author.php');

class BookAuthor extends Model
{
	private $book;
	private $author;

	public function __construct($connect = null)
	{
		$this->table = 'Book Author';
		$this->connect = $connect;
		$this->book = new Book($connect);
		$this->author = new Author($connect);
	}

	public function setIdBook($id)
	{
		$this->book->setId($id);
	}

	public function setIdAuthor($id)
	{
		$this->author->setId($id);
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id_book,:id_author)";
		$res = $this->connect->prepare($sql);

		$id_book = $this->book->getId();
		$id_author = $this->author->getId();

		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);
		$res->bindParam(":id_author", $id_author, PDO::PARAM_INT);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function show($id_book)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Book` = :id";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id_book, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function selectBook()
	{
		return $this->book->select();
	}

	public function showAuthor($id)
	{
		return $this->author->show($id);
	}

	public function showBook($id_book)
	{
		return $this->book->show($id_book);
	}

}
