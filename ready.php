<?
$p=$_GET["p"];




  
  		 $fp = fopen("readyp.txt", "w");


fputs($fp,$p);


fclose($fp);



?>