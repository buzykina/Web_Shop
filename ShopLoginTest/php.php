<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "demo";

	mysql_connect($host,$user,$password);
	mysql_select_db($db);

	if (isset($_POST['inputEmail'])) {
		
		$username = $_POST['inputEmail'];
		$userpassword = $_POST['inputPassword'];

		$sql_query = "select * from loginform where Name = '".$username."' AND Pass ='".$userpassword."' limit 1";

		$result = mysql_query($sql_query);

		if (mysql_num_rows($result)) {
			echo "Yes";
			exit();
		}
		else{
			echo "NOOOOo";
		}
	}
?>