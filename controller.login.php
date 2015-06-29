<?php

class LoginController
{
	public function login()
	{
		if($_POST['username'] == "admin" AND $_POST['password'] == "admin")
		{
			session_start();
			$_SESSION['imancha']['name'] = "Admin";
			$_SESSION['imancha']['email'] = "admin@imail.com";
			$_SESSION['imancha']['status'] = "admin";

			return true;
		}
		elseif($_POST['username'] == "employee" AND $_POST['password'] == "employee")
		{
			session_start();
			$_SESSION['imancha']['name'] = "Employee";
			$_SESSION['imancha']['email'] = "employee@imail.com";
			$_SESSION['imancha']['status'] = "employee";

			return true;
		}

		return false;
	}
}
