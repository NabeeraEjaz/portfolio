<?php
$servernmae="localhost";
$username="root";
$password="";
$database="portfolio";

$conn= new mysqli($servernmae,$username,$password,$database);

if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}

$sql="Select * FROM projects;";
$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row= $result->fetch_assoc())
    {
        echo"<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["description"]."</td><td>".$row["link"]."</td></tr>";
    }
}      
else
{
    echo"<tr><td colspan='4'>No data Avaliable</td></tr>\n";
}  
$conn->close();
?>