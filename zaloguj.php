<?php
	session_start();
	if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
		{
			header('Location: LOGIN');
			exit();
		}
	require_once "MySqlLog.php";
	$connection = @mysqli_connect($host, $db_user, $db_password, $db_name);	
	if ($connection->connect_errno!=0)
		{
			echo "Error: ".$connection->connect_errno;
		}
	else
	{
		$login = $_POST['login'];
		$password = $_POST['password'];	
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		if ($result = @$connection->query(
		sprintf("SELECT * FROM usersbase WHERE user='%s'",mysqli_real_escape_string($connection,$login))))
			{ 
				$howManyUsers = $result->num_rows;
				if($howManyUsers>0)
					{	
						$row = $result->fetch_assoc();
						if(password_verify($password,$row['pass']))
							{
								$_SESSION['logIn'] = true;
								$_SESSION['id'] = $row['id'];
								$_SESSION['user'] = $row['user'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['premium'] = $row['premium'];
								$_SESSION['VIP'] = $row['VIP'];
								
								unset($_SESSION['error']);
								$result->free_result();
								header('Location: https://purrrfect.online ');
							}
						else 
							{
								
								$_SESSION['error'] = '<span class="error">Your username or password is incorrect.</span>';
								header('Location: LOGIN');
								
							}
					} 	
				else 
					{
						
						$_SESSION['error'] = '<span class="error">Your username or password is incorrect.</span>';
						header('Location: LOGIN');
						
					}
				
			}
		$connection->close();
	}
?>