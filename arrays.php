<?php
// Birinchi usul 
$sonlar = [1,5,4,2,5,8];
// Ikkinchi usul
$sonlar1 = array(2,6,8,9,6,5,8);

$son = [23,5,6,7];
$cars = ['Cobalt', 'Damas','Malibu','Onix'];
echo $son[0]; // 23 ni chiqaradi

// Bo'sh massiv
$massiv = [];
$massiv[0] = "Ali";
$massiv[1] = "Sarvar";
print_r($massiv);
$massiv1 = [];
$massiv1["Ism"] = "Kamol";
$massiv1["Familiya"] = "Toshpo'latov";
$massiv1[0] = "Test";
print_r($massiv1);
$sonlar2 = [4,5,2,6,15,1,51,523,61,6];
print_r($sonlar2);
$juft = [];
// Foreach
$users = ["Ism" => "Maqsud", "Familiya" => "Qalandarov", "Yil" => "1986"];
foreach($users as $key => $value){
	echo $key. ": ". $value . ", ";
}
foreach($users as $value){
	echo $value. ", ";
}
$users += ["Manzil" => "Toshkent.sh, Chirchiq", "Yosh" => 39];
print_r($users);

// array_splice($sonlar2,6,2);
unset($sonlar2[2]);
print_r($sonlar2);

print_r(array_diff($users, ["Qalandarov"]));

sort($sonlar2);
print_r($sonlar2);

rsort($sonlar2);
print_r($sonlar2);
?>