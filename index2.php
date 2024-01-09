<? ob_start(); ?>
<script type="text/javascript" src="jquery.js"></script>
	<meta name="viewport" content="width=device-width">
<body >
<div id="tlo" style="position:absolute;z-index:-1;margin-top:0px;"><br><img src="tlo.jpg" id="obr" ><br></div>

<center>
	 
	<br>
 <canvas id="myCanvas" width="300" height="500"  >
</canvas> <br>

<span id="bw" style="position:absolute;z-index:666;">bramka wroga</span>

<script>
var tabela = new Array();
var tabela2 = new Array();
var tabela3 = new Array();
var i;
var rx;
var ry;
var akx;
var aky;
var ob=0;
var blok=0;

var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
		 ctx.reset();
ctx.fillStyle = "#000000";
		 for (var i=2;i<=12;i++){
			 for(var j=2;j<=16;j++){
				 ctx.fillRect(i*20,j*20,5,5);
			 }
		 }
	 ctx.fillRect(120,20,5,5);
		  ctx.fillRect(120,20,5,5);
		 ctx.fillRect(140,20,5,5);
		 ctx.fillRect(160,20,5,5);
		  ctx.fillRect(120,340,5,5);
		 ctx.fillRect(140,340,5,5);
		  ctx.fillRect(160,340,5,5);
		  ctx.beginPath();


		  function dc(){
			  
			  $.get( "dc.php", { cx: rx, cy: ry,lx: akx,ly: aky } ).done(function( data ) {
   // alert( data );
	//console.log(data);
	
	
	
	
	if(data==1){
		
			$.get( "xy.php", { x: akx, y: aky } ).done(function( data ) {
    //alert( "done" );
  });	
		
		return 1;
		
		
		}
  });
			  
		  }
		  
		  function sprawdz(){
			  
			 	 
 //alert( akx +" "+aky+" "+rx+" "+ry);

$.get( "zapis.php", { cx: rx, cy: ry,lx: akx,ly: aky } ).done(function( data ) {
    //alert( data );
	
	
  });
		  
	$.get( "xy.php", { x: rx, y: ry } ).done(function( data ) {
    //alert( "done" );
  });	
		  
  
  
  	$.get( "check.php", { rx: rx, ry: ry, akx: akx, aky: aky } ).done(function( data ) {
  // alert( data );
   
   if (data==0){
	   
	   
	   $.get( "ready.php", { p: 1 } ).done(function( data ) {
    //alert( "done" );
  });
	   
	   
		}
   
  });	
  
	
  }
		  
		  	  document.addEventListener("DOMContentLoaded", init, false);
    function init()
      {
        var canvas = document.getElementById("myCanvas");
        canvas.addEventListener("mousedown", getPosition, false);
      }
//--------------------------------------onclick
	  function getPosition(event)
      {
		  //obtocz=$("#obtocz").val();
        var x = new Number();
        var y = new Number();
        var canvas = document.getElementById("canvas");
        if (event.x != undefined && event.y != undefined)
        {
          x = event.x;
          y = event.y;
        }
        else // Firefox method to get the position
        {
          x = event.clientX + document.body.scrollLeft +
              document.documentElement.scrollLeft;
          y = event.clientY + document.body.scrollTop +
              document.documentElement.scrollTop;
        }
        x -= myCanvas.offsetLeft;
        y -= myCanvas.offsetTop;
       rx=x;
		ry=y;
		  rx=rx/20;
		  ry=ry/20;
		  rx=Math.round(rx);
		  ry=Math.round(ry);
		  rx=rx*20;
		  ry=ry*20;
		 /*
		 if(start==1){
		  akx=readCookie("akxc");
		  aky=readCookie("akyc");
		  }
		  	 start=1; 
		 first=1;
		  */
	
		//alert(rx+" "+ry);
		// akx=160;aky=180;		 
	
	
		 if(akx==rx+20 && aky==ry+20){ob=1;}
		 if(akx==rx-20  && aky==ry+20){ob=1;}
		 if(akx==rx+20 &&  aky==ry-20){ob=1;}
		 if(akx==rx-20 &&  aky==ry-20){ob=1;}
		 if(akx==rx+20 &&  aky==ry){ob=1;}
		 if(akx==rx-20 &&  aky==ry){ob=1;}
		 if(akx==rx &&  aky==ry+20){ob=1;}
		 if(akx==rx &&  aky==ry-20){ob=1;}
		 
		 if($('#ridi').val()=='ready'){
			 if(ob==1){
				 if(dc()==1){}else{
			 sprawdz();
				 }
			 //alert( akx +" "+aky+" "+rx+" "+ry);
				ob=0;
			}
		 }
			 
			// alert();
			 
			 
		  //sprawdz();

		  	  }
		  

</script>
<center>

<input type="text" id="ridi">



	<script>
	$('#bw').css('margin-top', '-100px');
	$('#bw').css('margin-left', '-50px');
	
$(window).on('resize', function()
		{
		var centro=$(window).width()/2-300;
		var centro2=$(window).width()/2-200;
	
		
			 
			 
			 $('#tlo').css('margin-left', centro + "px");
			  $('#obr').css('width', 600);
			 if($(window).width()<400){
				 
				  $('#obr').css('width', 400);
				  $('#obr').css('margin-top', 50);
				   $('#tlo').css('margin-left', centro2 + "px");
			 }
			 
			
			 
			  			 
//alert(centro);
		}).resize();

	</script>
	
		 
		 
		 <script>
		 
		 
		 
		 function reflesh(){
			 //alert('www');
			 
	
	
var request = new XMLHttpRequest();
request.open('GET', 'tabela.txt', false);  // `false` => synchronous request
request.send(null);

if (request.status === 200) {
  tabela=request.responseText.split("a");
}
// tabela=xhttp.responseText.split("a");
 

  for (i=0; i<=tabela.length - 1;i++){
	 
	  tabela2=tabela[i].split("b");
	
	  
	  ctx.beginPath();
	  ctx.moveTo(tabela2[0],tabela2[1]);
	  ctx.lineTo(tabela2[2],tabela2[3]);
	  
	  
	  
	   ctx.stroke();
	  //alert(tabela2[0]);

  }


						 $.get( "xy.txt", function( data ) {
  //$( ".result" ).html( data );
  //alert( "Load was performed." );
tabela3=data.split("a");
  akx=tabela3[0];
  aky=tabela3[1];
  
/*

  		 ctx.beginPath();
ctx.rect(akx,aky,5,5);
ctx.fillStyle = "blue";
ctx.fill();
ctx.stroke();
  
  */
  
  //alert( akx +" "+aky );
}); 




						 $.get( "readyp.txt", function( data ) {
							 
							 
							 if(data==2){
								 
								 $('#ridi').val('ready');
							 }else{
								 
								 $('#ridi').val('wait');
								 
							 }
							 

}); 
		 }
		 setInterval(reflesh, 1000); 
		 
		 
		 
		 ctx.beginPath();
ctx.rect(140,180,5,5);
ctx.fillStyle = "red";
ctx.fill();
ctx.stroke();
//document.addEventListener("DOMContentLoaded", init, false);
		 </script>