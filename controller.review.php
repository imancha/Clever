<?php

include_once('database.php');
include_once('model.book.review.php');

class ReviewController
{
	public function index()
	{
		$connect = Database::connect();
		$book_review = new BookReview($connect);
		$_book_review = $book_review->select();
		$data = [];

		if($_book_review->rowCount() > 0)
		{
			while($row = $_book_review->fetch(PDO::FETCH_ASSOC))
			{
				$book = $book_review->showBook($row['ID Book']);

				if($book->rowCount() == 1)
				{
					$_row = $book->fetch(PDO::FETCH_ASSOC);
				}

				$data[] = [
					'id' => $row['ID Book'],
					'user' => $row['Reviewer'],
					'email' => $row['Email'],
					'review' => $row['Review'],
					'rate' => $row['Rate'],
					'date' => $row['Date'],
					'book' => $_row['Title']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function select()
	{
		$connect = Database::connect();
		$book_review = new BookReview($connect);
		$_book_review = $book_review->selectBook();
		$data = [];

		if($_book_review->rowCount() > 0)
		{
			while($row = $_book_review->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = [
					'id' => $row['ID'],
					'title' => $row['Title']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}

	public function store()
	{
		$connect = Database::connect();
		$book_review = new BookReview($connect,[
			'reviewer' => $_POST['name'],
			'email' => $_POST['email'],
			'review' => $_POST['review'],
			'rate' => $_POST['rate'],
			'date' => date("Y-m-d H:i:s")
		]);

		$book_review->setIdBook($_POST['title']);
		$_book_review = $book_review->insert();

		Database::disconnect();

		return $_book_review;
	}

	public function delete($id_book,$reviewer)
	{
		$connect = Database::connect();
		$book_review = new BookReview($connect);
		$_book_review = $book_review->delete($id_book,$reviewer);

		Database::disconnect();

		return $_book_review;
	}

	public function getReview($id_book)
	{
		$connect = Database::connect();
		$review = new BookReview($connect);
		$_review = $review->getBook($id_book);
		$data = [];

		if($_review->rowCount() > 0)
		{
			while($row = $_review->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = [
					'book' => $row['ID Book'],
					'name' => $row['Reviewer'],
					'review' => $row['Review'],
					'rate' => $row['Rate'],
					'date' => $row['Date']
				];
			}
		}

		Database::disconnect();

		return json_encode($data);
	}
}
