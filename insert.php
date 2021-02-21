<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> insert </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
   <?php
  $severname = "localhost";
  $username = "root";
  $password = "123456789";
  $dbname = "resort";

  $conn = new mysqli( $severname, $username, $password, $dbname);

  if ($conn->connect_error)
  {
		die("Connection failed:" . $conn->connect_error);
   }

   $sql = "INSERT INTO register ('firstname','lastname','Number of rooms','Number of nights','check in date','check in time','check out date','check out time','telephone')
   Values ('Jaruwan','Kaewkanta','2','2','2019-10-23','12:10','2019-10-25',12:10','0953563113');

   if ($conn->query($sql)==TRUE)
   {
     echo "New record created successfully";
	}
	else
	{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
   ?>
 </BODY>