<?php
	$login_username = $_POST['login_username'];
	$login_upassword = $_POST['login_upassword'];

	// Database connection
	// Create connection
    //$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	$conn = new mysqli('localhost','id15171402tpms_2020','B~n$*Xo0f&\kt4iG','id15171402_tpms2020');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(login_username, login_upassword) values(?, ?)");
		$stmt->bind_param("ss", $login_username, $login_upassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>