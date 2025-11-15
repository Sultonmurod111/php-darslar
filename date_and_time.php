<?php
// 15.11.2025
echo strtotime("+7 days")."<br>";
echo date("d.m.Y H:i", strtotime("-10 days"))."<br>";
echo date("Y-m-d",strtotime("last Thursday"))."<br>";
echo date("Y-m-d",strtotime("Next 2 yrs")). "<br>";
echo date("Y-m-d",strtotime("2007.08.17")). "<br>";
$t_yil = "2011.12.05";
$yosh = (time()- strtotime($t_yil)) / (60 * 60 * 24 * 365);
echo (int)$yosh;
// Unix time
echo "Unix time: ".time()."<br>";
echo "Unix time: ".strtotime("2025-11-14") ."<br>";
?>