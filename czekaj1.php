<meta http-equiv="refresh" content="5; url=index.php?p=1">
<?

echo $_GET["wynik"];

if($_GET["wynik"]=="player1 wygral"){
	$myfile=fopen("tura1.txt", "r");

$liczba = fread($myfile,1000);
	fclose($myfile);
	$liczba=$liczba+1;
	$fp = fopen("tura1.txt", "w");
fputs($fp, $liczba);
fclose($fp);
}


if($_GET["wynik"]=="player2 wygral"){
	
		$myfile=fopen("tura2.txt", "r");

$liczba = fread($myfile,1000);
	fclose($myfile);
	$liczba=$liczba+1;
	$fp = fopen("tura2.txt", "w");
fputs($fp, $liczba);
fclose($fp);

}
?>