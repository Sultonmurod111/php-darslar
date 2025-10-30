<?php
function funksiyanomi(){
	echo "Bu funksiya ishlayapti";
}


// echo "Assalomu alaykum! \n";
// echo "Assalomu alaykum! \n";
// echo "Assalomu alaykum! \n";
// echo "Assalomu alaykum! \n";

function salom() {
    echo "Assalomu alaykum! \n";
}

    salom();
	salom();
	salom();
	salom();
function yigindi($x, $y)  {
	echo "Yig'indi:" . $x + $y;
}
yigindi(34,86);echo "\n";
yigindi(23,45);echo "\n";
yigindi(31,36);echo "\n";








function yosh($t_yil,$x_yil = 2024) {
	echo "Sizning yoshingiz: ".$x_yil - $t_yil." da \n";
}

yosh(2011);
yosh(2011,2025);



function sum($x, $y) {
	return $x + $y;
}
$summa = sum(45, 13);
if($summa > 30) {
	echo "Summa 80 dan katta \n";
}
function func() {
	for($i = 0; $i <= 20; $i++){
		echo $i.",";
	}
}
func()
?>