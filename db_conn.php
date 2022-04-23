
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bloodbank";

try{
	$db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected Successfully";

}
catch(PDOEXCEPTION $e){
	echo "Connection Failed" .$e->getMessage();
}





?>