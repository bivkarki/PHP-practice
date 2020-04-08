<!DOCTYPE html>
<hmtl>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
Name:<input type="text" placeholder="enter your name" name="name">
<button type="submit">Click Here</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["name"];
if (empty($name))
echo "Name is Empty";
else
echo "Welcome ".$name;
}

?>
</body>
</html>
