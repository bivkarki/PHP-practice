<!Doctype html>
<html>
<body>
<?php
$x=10.5;
$y=5.5;
function add_num()
{
$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
add_num();
echo "The sum is: ".$z;
?>
</body>
</html>
