<?php
if(file_exists("test.txt")){
	$file = fopen("test.txt", "r");
    $content = fread($file,filesize('test.txt'));
    fclose($file);
    echo $content;
}else{
	echo "Fayl mavjud emas!";
}
// Faylga yozish 
$file = fopen('data.txt', "w");
fwrite($file,"Binary-safe file write
fwrite() writes the contents of `data` to the file stream pointed to by `stream`.");
fclose($file);
// Faylga ma'lumot qo'shib yozish
$file = fopen('data.txt', "a");
fwrite($file,"\n Yangi ma'lumotni qo'shish");
fclose($file);
// unlink('test.txt');
if(file_exists("data.txt")){
	echo "Fayl mavjud!";
}else{
	echo "Fayl mavjud emas!";
}
echo "<br>";
// Faylni o'qish
file_put_contents('data.txt',"Hello World!");
// Faylga ma'lumot qo'shish
file_put_contents('data.txt',"Hello World!",FILE_APPEND);
?>