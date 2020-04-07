<!Doctype html>
<html>
<body>
<?php
$name=array("bivek","karki","vivek");
$len=count($name);
echo "<br>".$len."<br>";

function traverse_arr($name)
{ 
 for($i=0;$i<$GLOBALS['len'];$i++)
  {echo "<br>". $name[$i]; }
echo "<br>";
}

sort($name);
traverse_arr($name);
rsort($name);
traverse_arr($name);
$age =array("Bivek"=>23,"biv"=>22);
echo $age['biv']." ".$age['Bivek'];
?>
</body>
</html>
