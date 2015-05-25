<?php
	include "DB_config.php";


	$con=mysql_connect("$servername", "$username", "$password")or die("cannot connect");
	mysql_select_db("tienda_virtual")or die("cannot select DB");
	mysql_query('SET CHARACTER SET utf8');
	$sql = "select * from productos";  
	$result = mysql_query($sql); 
	$var = array();
	if(mysql_num_rows($result)){
	    while($row=mysql_fetch_object($result)){
	    $var[]=$row;
	    }
	    $json = json_encode( $var );
	    echo $json;
	}

	mysql_close($con);


?> 
