<?php 
	require_once '../includes/db_con.php';
	
	function validate_email($email){
		return (preg_match("/(@.*@)|(\.\.)|(@\.)|(^\.)/", $email) || !preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)) ? false : true;
	}
	
	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email = $_POST['email'];
		if (validate_email($email)){
			$query = "SELECT * from email WHERE email = '$email'";
			$result = mysql_query($query);
			if($result){
				if(mysql_num_rows($result) == 0){
					$query = "INSERT INTO email(email) VALUES('$email')";
					$result = mysql_query($query);
					
					@mail('edward@essaypremier.com','New email arrived!!!', $email);
					if(!$result){
						echo mysql_error();
						exit;
					}
				}
			}
			else{
				echo mysql_error();
				exit;
			}
		}
	}
	else{
		echo "not set";
	}
?>