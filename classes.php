<!Doctype html>
<html>
<body>
<?php
class shape //class declaration
{
function shape() //constructor
{
$this->type="Square";
}

}
//object
$sqr = new shape();

//show object properties
echo $sqr->type;

?>
</body>
</html>
