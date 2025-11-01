<?php
// birinchi usul 
$sonlar = array(2,5,6,5,7,4,'Test','Qiymat');
// ikkinchi usul
$sonlar1 = [4,7,4,7,8,9,3,5,1,6];

echo $sonlar[4];
echo "\n";
echo $sonlar[3];
echo "\n";
$sonlar[4] = 67;
echo $sonlar[4];
print_r($sonlar);
// massivga yangi element qo'shish oxiriga
array_push($sonlar,115,53);
print_r($sonlar);
// Associative Arrays
$car = ["Brand" => "Koenigsegg", "Model" => "Jesko Absolut","Year"=> 2020];
print_r($car);
echo $car['Model'];
$car['Model'] = 'Gemera';
echo "\n";
echo $car['Model'];
?>