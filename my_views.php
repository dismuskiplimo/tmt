<?php
	require_once 'includes/db_con.php';
	
	$views = 0;
	
	$query = "SELECT ip_address FROM clicks";
	$statement = $connection->prepare($query);
	
	if($statement->execute()){
		$statement->store_result();
		$views = $statement->num_rows;
	}
?>
<!doctype html>
<html>
	<head>
		<title>Views</title>
	</head>
	
	<body>
			<p style = "text-align:center; font-size:7em; color:#118b0e; text-shadow:2px 2px 2px #0fc70a;">Views: <?php echo $views;?></p>
	</body>
</html>