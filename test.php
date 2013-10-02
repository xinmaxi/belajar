<?php
 $kata=" ww makan nasi di rumah saya pada hari. kamis tempat";
  

    $remove = array("\n", "\r\n", "\r", "  ");
    $hasil = str_replace($remove, ' ', $hasil);

 $hasil=explode(" ",$kata);    
 

 

 $jumlahkata=count($hasil);                                                
	for($index=0; $index<$jumlahkata; $index++){
		
		if(strtolower($hasil[$index])=="makan"){
			$w = $hasil[$index];
		
			for($t=1;$t<=7;$t++){
			
				if((strcasecmp($acara3,"di")!=0) && (strpos($acara4,'.')!=true)){
				
						$acara3=$hasil[$index+$t];	
						$acara4 .=$acara3." " ;
							echo $acara3."<br>";
						
					}

			}
			
		}	
	}
 echo "$w  $acara4 ";

 
// $a="saya"; $b="saya";
// $c=strcasecmp($a,$b);
// echo $c;
?>