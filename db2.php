<!Doctype html>
<html>
<body>
<?php
$servername='localhost';
$username='root';
$password='123456';
$database='db2';
$conn=new mysqli($severname,$username,$password,$database);
if($conn->connect_error)
{die("Connection Failed".$conn->connect_error);
}
else
{
if($conn->query("create table student (id int,name varchar(15));"))
{
echo "Table student is created";
}
else
echo "error caught";
}
?>
</body>
</html>
