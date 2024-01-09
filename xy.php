<?
$clickx=$_GET["x"];
$clicky=$_GET["y"];




  
  		 $fp = fopen("xy.txt", "w");

$pom=$clickx."a".$clicky;
fputs($fp,$pom);


fclose($fp);



?>