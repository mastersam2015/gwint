<?

$myfile=fopen("pass2.txt", "r");
$stare = fread($myfile,filesize("pass2.txt"));
fclose($myfile);

echo $stare;


?>