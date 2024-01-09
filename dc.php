<?
$clickx=$_GET["cx"];
$clicky=$_GET["cy"];
$lastx=$_GET["lx"];
$lasty=$_GET["ly"];




	  	  	 $fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$list = fgets($fp);  

  }
  
  fclose($fp);
			  
	$tab = explode("a", $list);		  
	
		  	foreach ($tab as $key) {
    
	$dane = explode("b", $key);
	
	$x1=$dane[0];
	$y1=$dane[1];
	$x2=$dane[2];
	$y2=$dane[3];

	if(($x1==$clickx and $y1==$clicky and $x2==$lastx and  $y2==$lasty)or($x2==$clickx and $y2==$clicky and $x1==$lastx and  $y1==$lasty)){
		
		
		$blok=1;
		
	}
	
	
			}
			
			if($blok==1){
				echo "1";
			}
			
			
			?>