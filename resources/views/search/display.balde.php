<?php 

$ques=$_GET["q"];
$myfile = fopen($ques, "r") or die("Unable to open file!");
echo "<pre>".fread($myfile, filesize($ques))."</pre>";
fclose($myfile);

 ?>
