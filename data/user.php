<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tienda_virtual";



	$user=json_decode(file_get_contents('php://input'));  //get user from 

	/*se trae la información de la base de datos*/
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT password from usuarios where username = "."'".$user->mail."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	   	while($row = $result->fetch_assoc()) {	   
	        $userPassword = $row['password'];

	        if($user->pass==$userPassword) 
	        {
				session_start();
				$_SESSION['uid']=uniqid('ang_');
				print $_SESSION['uid'];

				break;
			}

	    }
	} else {
	    echo "0 results";  //aqui se debe mandar a decir que no hay persona con ese username
	}
	$conn->close();

	
	
	



?>