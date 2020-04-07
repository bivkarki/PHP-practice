<!Doctype html>
<html>
<body>
<?php
function streams($name="You",$stream){
echo $name." is in ". $stream;
echo "<br>";
}
streams("bivek","IT");
streams("","CSE");
streams("Himansu","Civil");
function add($n1,$n2)
{
return $n1+$n2;
}
echo "the sum of 4.5 and 3.5 is ".add(4.5,3.5);
?>
</body>
</html>
