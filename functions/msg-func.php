
<?php
 
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="blog";


$db_connect     = mysqli_connect($db_host, $db_username, $db_password, $db_name);
// Check connection
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message']; 

$query=mysqli_query($db_connect, "INSERT INTO message(name,email,subject,message) VALUES ('$name','$email','$subject','$message')") or die(mysqli_error($db_connect));


mysqli_close($db_connect);
header("location:contact.php");
   

