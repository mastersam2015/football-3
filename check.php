<?		  $clickx=$_GET["rx"];
		  $clicky=$_GET["ry"];
		  $lasty=$_GET["aky"];
		  $lastx=$_GET["akx"];
		  $n=0;
		//silnik  ------------------------------------------------
		  if (!empty($clickx)){
			  
			  	  	 $fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$list = fgets($fp);  

  }
  
  fclose($fp);
			  
	$tab = explode("a", $list);		  
	
		  	foreach ($tab as $key) {
    
	$dane = explode("b", $key);
	
	$ax=$dane[0];
	$ay=$dane[1];
	$bx=$dane[2];
	$by=$dane[3];
	//echo "<br>".$ax;
	//echo "<br>".$ay;
	//echo "<br>".$bx;
	//echo "<br>".$by."<br>";
	if ($clickx==$bx and $clicky==$by and $lastx==$ax and $lasty==$ay){
		
		//echo "<script>alert(\"blok\");</script>";
		//cos.php?akx='+". $pakax ."+'&aky='+". $pakay;
		//header("Location: cos.php?akx=".$pakax."&aky=".$pakay."&ready=1");
		
	}else {
		if((($clickx+20)==$bx and ($clicky+20)==$by and $clickx==$ax and $clicky==$ay)){
			$w1=1;
		}
		if(($clickx)==$bx and ($clicky+20)==$by and $clickx==$ax and $clicky==$ay){
			$w2=1;
		}
		if(($clickx+20)==$bx and ($clicky)==$by and $clickx==$ax and $clicky==$ay){
			$w3=1;
		}
		if(($clickx+20)==$bx and ($clicky-20)==$by and $clickx==$ax and $clicky==$ay){
			$w4=1;
		}
		if(($clickx-20)==$bx and ($clicky+20)==$by and $clickx==$ax and $clicky==$ay){
			$w5=1;
		}
		if(($clickx-20)==$bx and ($clicky-20)==$by-20 and $clickx==$ax and $clicky==$ay){
			$w6=1;
		}
		if(($clickx-20)==$bx and ($clicky)==$by and $clickx==$ax and $clicky==$ay){
			$w7=1;
		}
		if(($clickx)==$bx and ($clicky-20)==$by and $clickx==$ax and $clicky==$ay){
			$w8=1;
		}
			  
	//if((($clickx+20)==$bx and ($clicky+20)==$by)or(($clickx)==$bx and ($clicky+20)==$by)or(($clickx+20)==$bx and ($clicky)==$by)or(($clickx+20)==$bx and ($clicky-20)==$by)or(($clickx-20)==$bx and ($clicky+20)==$by)or(($clickx-20)==$bx and ($clicky-20)==$by)or(($clickx-20)==$bx and ($clicky)==$by)or(($clickx)==$bx and ($clicky-20)==$by)){
	if($w1==1 or $w2==1 or $w3==1 or $w4==1 or $w5==1 or $w6==1 or $w7==1 or $w8==1){
		
		$odbil++;
		//echo "0";
	}else{
		//echo "1";
	}
	
	}
	
	}
	
}

if($odbil>1){
	
	echo "1";
	
}else{
	
	echo "0";
}
	?>