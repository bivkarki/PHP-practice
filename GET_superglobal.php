<!Doctype html>
<html>
<body>
<form method="get"> 
Name:<input type="text" name="name"><br>
E-mail:<input type="text" name="email"><br>
<br>
<input type="submit">
</form>
<?php
echo "Welcome ".$_GET["name"]."<br>";
echo "Your Email Address ".$_GET["email"];
?>
<br>
<a href="GET_superglobal.php?name=Bivek&email=l3ivkarki@gmail.com">Click here<a>
<?php echo "Name ".$_GET["name"]." Email ID: ".$_GET["email"];?>
</body>
</html>
