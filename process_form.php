<?php
$servernmae="localhost";
$username="root";
$password="";
$database="Portfolio";

$conn= mysqli_connect($servernmae,$username,$password,$database);

if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO contactMsgs(name,email,message) 
      VALUES('$name','$email','$message');";

if($conn->query($sql)===TRUE)
{
    echo '<script language="javascript" type="text/javascript"> 
                alert("Message successfully Inserted");
        </script>';
}      
else
{
    echo"Error inserting Record\n";
}  
$conn->close();
?>