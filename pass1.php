<?

$myfile=fopen("pass1.txt", "r");
$stare = fread($myfile,filesize("pass1.txt"));
fclose($myfile);

echo $stare;


?>