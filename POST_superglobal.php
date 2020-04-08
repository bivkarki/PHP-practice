<!Doctype html>
<html>
<body>
<form method="post">
Name:<input type="text" name="name"><br>
E-mail:<input type="text" name="email"><br>
<br>
<input type="submit">
</form>
<?php
echo "Welcome ".$_POST["name"]."<br>";
echo "Your Email Address ".$_POST["email"];
?>
<br>
<a href="POST_superglobal.php?name=Bivek&email=l3ivkarki@gmail.com">Click here(won't work)<a>
<?php echo "Name ".$_POST["name"]." Email ID: ".$_POST["email"];?>
</body>
</html>
