<!Doctype html>
<html>
<body>
<?php
$servername='localhost'; //hostname
$username='root'; //credentials
$password='123456'; //password
$conn=new mysqli($servername,$username,$password); //mysqli => improved mysql
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo "Connection Built";
if ($conn->query("create database db2;"))
{
echo "database is created";
}
else
echo "error caught";
}
?>
</body>
</html>
