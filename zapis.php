<?
$clickx=$_GET["cx"];
$clicky=$_GET["cy"];
$lastx=$_GET["lx"];
$lasty=$_GET["ly"];

	$fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$line = fgets($fp);  
  }
  
  		 $fp = fopen("tabela.txt", "w");
$pom=$line."a".$lastx."b".$lasty."b".$clickx."b".$clicky;
$pom=$pom."a".$clickx."b".$clicky."b".$lastx."b".$lasty;
fputs($fp,$pom);


fclose($fp);

			


?>