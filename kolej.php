<?

$myfile=fopen("kolej.txt", "r");
$stare = fread($myfile,filesize("kolej.txt"));
fclose($myfile);

echo $stare;


?>