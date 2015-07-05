<?php

include_once('model.php');

class Customer extends Model
{
	private $id;
	private $first_name;
	private $last_name;
	private $email;
	private $phone;
	private $company;
	private $address;
	private $city;
	private $post_code;
	private $state;
	private $country;

	public function __construct($connect = null, Array $prop = [])
	{
		$this->table = 'Customer';
		$this->connect = $connect;

		foreach($prop as $key=>$val)
		{
			$this->$key = $val;
		}
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function insert()
	{
		$sql = "INSERT INTO `".$this->table."` VALUES (:id,:first_name,:last_name,:email,:phone,:company,:address,:city,:post_code,:state,:country)";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $this->id, PDO::PARAM_INT);
		$res->bindParam(":first_name", $this->first_name, PDO::PARAM_STR);
		$res->bindParam(":last_name", $this->last_name, PDO::PARAM_STR);
		$res->bindParam(":email", $this->email, PDO::PARAM_STR);
		$res->bindParam(":phone", $this->phone, PDO::PARAM_STR);
		$res->bindParam(":company", $this->company, PDO::PARAM_STR);
		$res->bindParam(":address", $this->address, PDO::PARAM_STR);
		$res->bindParam(":city", $this->city, PDO::PARAM_STR);
		$res->bindParam(":post_code", $this->post_code, PDO::PARAM_STR);
		$res->bindParam(":state", $this->state, PDO::PARAM_STR);
		$res->bindParam(":country", $this->country, PDO::PARAM_STR);

		if($res->execute())
		{
			return true;
		}

		return false;
	}

	public function select()
	{
		$sql = "SELECT * FROM `".$this->table."` ORDER BY `First Name` ASC";
		$res = $this->connect->prepare($sql);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

	public function show($id)
	{
		$sql = "SELECT * FROM `".$this->table."` WHERE `ID`=:id";
		$res = $this->connect->prepare($sql);

		$res->bindParam(":id", $id, PDO::PARAM_INT);

		$res->execute() or die(print_r($res->errorInfo()[2]));

		return $res;
	}

}
