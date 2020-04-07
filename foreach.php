
<!Doctype html>
<html>
<body>
<?php 
$colors=array("red","green","blue");
foreach ($colors as $value)
{ echo $value."<br>"; }

$age=array("biv"=>23,'b'=>12,'bc'=>23);
foreach ($age as $x=>$value)
{ echo $x,"  ",$value."<br>";}

?>
</body>
</html>
