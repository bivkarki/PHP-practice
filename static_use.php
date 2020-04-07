
<!Doctype html>
<html>
<body>
<?php 
$name="bivke";
function increment()
{
static $count=0;
echo $count."<br>";
$count++;
}
increment();
increment();
increment();

?>
</body>
</html>
