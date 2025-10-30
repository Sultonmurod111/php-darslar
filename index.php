 <?php
// $mashina = "Nexia";
// $mashina1 = "Cobalt";
// $mashina2 = "Onix";
// $mashina3 = "Tahoe";
// $mashina4 = "Malibu"; 
// $chevrolet = ["Nexia","Cobalt","Onix","Tahoe","Malibu"];
// echo $chevrolet[3];
// echo "\n";

// $i = 0;
// while($i <= 55){
// 	echo $i.",";
// 	// $i++;
// 	if($i == 20){
// 		break;
// 	}
// 	$i+=5;
// }


$i = 1;  
while ($i < 6):
	echo $i;
	$i++;
endwhile; 











 for($i = 1; $i <= 10; $i++){
 	echo $i. ",";
}
echo "\n";
 for ($i = 10; $i >= 1; $i--){
 	echo $i. ",";
 }
 echo "\n";
 for ($i = 2; $i <= 34; $i+=2){
	if($i == 30)
		break;
 	echo $i. ",";
 }
 ?>