<?
/*
id
power
powerbackdup
miejsce:miecz,luk,balista
tromba:miecz,luk,balista,qwerty+id
pogoda:miecz,luk,balista,slonce,none
szpieg:0,1,2
porzoga:tak,nie
podwojenie:cecha,none
*/

?>
<form method="POST">
id<input type="text" name="idt" value="id"><input type="text" name="id"><br>
power<input type="text" name="powert" value="power"><input type="text" name="power"><br>
powerbackdup<input type="text" name="powerbackdupt" value="powerbackdup"><input type="text" name="powerbackdup"><br>
miejsce<input type="text" name="miejscet" value="miejsce"><input type="text" name="miejsce"><br>
tromba<input type="text" name="trombat" value="tromba"><input type="text" name="tromba" value="0"><br>
pogoda<input type="text" name="pogodat" value="pogoda"><input type="text" name="pogoda" value="0"><br>
szpieg<input type="text" name="szpiegt" value="szpieg"><input type="text" name="szpieg" value="0"><br>
porzoga<input type="text" name="porzogat" value="porzoga"><input type="text" name="porzoga" value="nie"><br>
podwojenie<input type="text" name="podwojeniet" value="podwojenie"><input type="text" name="podwojenie" value="none"><br>
opis<input type="text" name="opist" value="opis"><input type="text" name="opis" ><br>

<input type='submit' value='ok'>
</form>
<?

$idt=$_POST["idt"];
$id=$_POST["id"];
$powert=$_POST["powert"];
$power=$_POST["power"];
$powerbackdupt=$_POST["powerbackdupt"];
$powerbackdup=$_POST["powerbackdup"];
$miejscet=$_POST["miejscet"];
$miejsce=$_POST["miejsce"];
$trombat=$_POST["trombat"];
$tromba=$_POST["tromba"];
$pogodat=$_POST["pogodat"];
$pogoda=$_POST["pogoda"];
$szpiegt=$_POST["szpiegt"];
$szpieg=$_POST["szpieg"];
$porzogat=$_POST["porzogat"];
$porzoga=$_POST["porzoga"];
$podwojeniet=$_POST["podwojeniet"];
$podwojenie=$_POST["podwojenie"];
$opist=$_POST["opist"];
$opis=$_POST["opis"];


if(!empty($id)){

$myfile=fopen("prototyp.txt", "r");
	$staredane = fread($myfile,filesize("prototyp.txt"));


$staredane=$staredane."@".$idt."*".$id."*".$powert."*".$power."*".$powerbackdupt."*".$powerbackdup."*".$miejscet."*".$miejsce."*".$trombat."*".$tromba."*".$pogodat."*".$pogoda."*".$szpiegt."*".$szpieg."*".$porzogat."*".$porzoga."*".$podwojeniet."*".$podwojenie."*".$opist."*".$opis;



	$fp = fopen("prototyp.txt", "w");

	
fputs($fp, $staredane);

}


$myfile=fopen("prototyp.txt", "r");

	$staredane = fread($myfile,filesize("prototyp.txt"));
$tabela=explode("@", $staredane);
foreach($tabela as $funkcje){
	
	
	$key=explode("*", $funkcje);
	
	
	
}

var_dump($key);

echo "<br><br><br>";

var_dump($key[17]);

fclose($myfile);
fclose($fp);
?>