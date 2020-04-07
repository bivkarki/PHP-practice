<!Doctype html>
<html>
<body>
<?php              // declare(strict_types=1) strict requirement
function addNumbers(int $a,int $b)
{ return $a + $b;
}
echo addNumbers(5,5); 
//if we don't declare strict type then even we pass 5 days it takes as 5
?>
</body>
</html>
