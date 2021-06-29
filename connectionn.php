<!DOCTYPE html>
<html>
<body>

<?php

//create.connection

$user="root";
$pass="";
$db="repot";

$connection= new mysqli("localhost",$user ,$pass ,$db);

//check connection
if(!$connection)
{
die("unable to connect to the database".connection_erorr);
}
echo "Database connection successfully .";
//close connection



$inser_data = $connection -> query("INSERT INTO repot (run,motorl1,motorl2,motorl3,motorl4,motorl5)
VALUES ('1','90','90','90','90','90')");



if ($inser_data === TRUE) {
    echo "The data has been added to the table";
}
else
{
    echo " error :". $connection->error;
}
	?>
	</body>
</html>