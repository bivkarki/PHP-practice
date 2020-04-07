<!Doctype html>
<html>
<body>
<?php
$servername='localhost';
$username='root';
$password='123456';
$database='db2';
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
die("Connection Failed".$conn->connect_error);
else
{echo "Connection Built";
$result=($conn->query('select * from student;'));
echo"Number of fields".$result->num_fields;
if ($result->num_rows>0)
{
while($row=$result->fetch_assoc())
 echo"<br>name: ".$row['name'];
}
else
echo "<br>No rows found";
}
?>
</body>
</html>
