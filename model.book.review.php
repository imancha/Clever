<?php

include_once('model.php');
include_once('model.book.php');

class BookReview extends Model
{
	private $book;
	private $reviewer;
	private $email;
	private $review;
	private $rate;
	private $date;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->table = 'Book Review';
		$this->connect = $connect;
		$this->book = new Book($connect);

		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
	}

	public function setIdBook($id)
	{
		return $this->book->setId($id);
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` ORDER BY `Date` DESC";
		$res = $this->connect->prepare($sql);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id_book,:reviewer,:email,:review,:rate,:date)";
		$res = $this->connect->prepare($sql);

		$id_book = $this->book->getId();

		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);
		$res->bindParam(":reviewer", $this->reviewer, PDO::PARAM_STR);
		$res->bindParam(":email", $this->email, PDO::PARAM_STR);
		$res->bindParam(":review", $this->review, PDO::PARAM_STR);
		$res->bindParam(":rate", $this->rate, PDO::PARAM_INT);
		$res->bindParam(":date", $this->date, PDO::PARAM_STR);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function delete($id_book,$reviewer)
	{
		$sql = "DELETE FROM `".$this->table."` WHERE `ID Book` = :id_book AND `Reviewer` = :reviewer";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);
		$res->bindParam(":reviewer", $reviewer, PDO::PARAM_STR);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function getBook($id_book)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID Book`=:id_book";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id_book", $id_book, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function selectBook()
	{
		return $this->book->select();
	}

	public function showBook($id_book)
	{
		return $this->book->show($id_book);
	}

}
