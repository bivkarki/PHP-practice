
<!Doctype html>
<html>
<body>
<?php 
$txt="I am here don't worry";
echo $txt."<br>";
$len=strlen($txt);
$wc=str_word_count($txt);
echo "length: ".$len."<br>word count:  ".$wc;
echo "<br>Reverse of the ".$txt." is ".strrev($txt);
echo "<br> the position of am in text is ".strpos($txt,'here');
echo "<br>".str_replace("don't","do",$txt);
?>
</body>
</html>
