<!--
id
power
powerbackdup
miejsce:miecz,luk,balista
tromba:miecz,luk,balista,qwerty+id
pogoda:miecz,luk,balista,slonce,none
szpieg:0/2
porzoga:tak,nie
podwojenie:cecha,none
-->
<?
error_reporting(81);
//------------------
//----losowanie kart
//------------------


/*
$myfile=fopen("karty.txt", "r");
$stare = fread($myfile,filesize("karty.txt"));
fclose($myfile);


if($_GET["p"]==1){
	$talia="";
	$z=1;
while($z==1){
$zm=rand(2,40);
//$por=",".$zm;
if (strstr($talia,$zm)){
}else{
$talia.=$zm.",";
$p++;


}
if ($p==30){
$z=0;
}
}
$fp = fopen("karty.txt", "w");
fputs($fp, $talia);
fclose($fp);



$stare2=explode(",", $talia);
foreach ($stare2 as $key9){
$ilo=$ilo+1;
if($ilo<=10){

$dotabp.=$key9.",";

}
if($ilo>10 and $ilo<20){
$dotabp2.=$key9.",";
}
}


$stare = $talia;


$stare=str_replace($dotabp,"",$stare);

$stare=str_replace($dotabp2,"",$stare);

$fp = fopen("karty.txt", "w");
fputs($fp, $stare);
fclose($fp);

$fp = fopen("kartyplayer.txt", "w");
fputs($fp, $dotabp);
fclose($fp);

$fp = fopen("kartyplayer2.txt", "w");
fputs($fp, $dotabp2);
fclose($fp);

}
//var_dump($stare);

*/

?>

<script type="text/javascript" src="jquery.js"></script>


<style>

h1 {
	
	
	color:ffffff;
	background-color:000000;
	font-family: "Arial";
}


td {

width:100;
height:80;

}

table {
	
	border: 3px solid #6666ff;
	
}


.aaa {

width:600;
height:80;

}

.bbb {


height:0;

}

.ccc {

width:100;
height:70;
color:ffffff;
background-color:000000;
font-family: "Arial";
font-size:24px;
}

.ddd {
display: flex;align-items: center;
    justify-content: center;
	}
	
	img {
	
	height:80;
	width:50;
	
	}
	
		.traba {
	
	height:26;
	width:50;
	
	}
	
		.srodek {
	
	width:300;
height:400;

position:absolute;

margin-left:-150;
	
	}
	
	.dev{
		
		display:flex;
		
	}
</style>
<script>
function wyswietl(x){
$("#obrazek").css("display","inline");
$("#obrazek").attr("src",x);


}

function schowaj(){
$("#obrazek").css("display","none");
}

</script>

<?
//------------------
//----interakcja prototyp
//------------------
//chmod("tabela.txt", 0755);
$idp=$_GET["id"];
if(!empty($idp)){
$myfile=fopen("prototyp.txt", "r");

$prototyp = fread($myfile,filesize("prototyp.txt"));
fclose($myfile);

$prototyp2=explode("@", $prototyp);
foreach ($prototyp2 as $funkcje){

$poms="id*".$idp."*";
if(strstr($funkcje,$poms)){//poprawione

$myfile=fopen("tabelap2.txt", "r");
$stare = fread($myfile,filesize("tabelap2.txt"));
fclose($myfile);
$stare=$stare.",@".$funkcje;


	$fp = fopen("tabelap2.txt", "w");

	
fputs($fp, $stare);
fclose($fp);



}
}


$myfile=fopen("kartyplayer2.txt", "r");
$testy = fread($myfile,filesize("kartyplayer2.txt"));
fclose($myfile);

/*

$pompa=$idp.",";
$testy=str_replace($pompa,"",$testy);
*/
$kartyz="";
$kartyid=explode(",", $testy);

foreach ($kartyid as $kartaid){
	
	if($kartaid==$idp){
		
		
	}else{
		
		$kartyz=$kartyz.",".$kartaid;
		
	}

	
	}

//$kartyz=$kartyz.",";

	$fp = fopen("kartyplayer2.txt", "w");

	
fputs($fp, $kartyz);
fclose($fp);	

}

/*
$myfile=fopen("tabela.txt", "r");
$test = fread($myfile,10000);
fclose($myfile);

var_dump($test);
*/

//------------------
//----operacje na plikach
//------------------



$myfile=fopen("tabelap2.txt", "r");
$taliaakcja = fread($myfile,filesize("tabelap2.txt"));
fclose($myfile);

//------------------
//----dynmiczna tromba
//------------------



//------------------slonce fix------------


$taliaakcja9=explode("@", $taliaakcja);

foreach ($taliaakcja9 as $funkcje9){
//$key9=explode("*", $funkcje9);
$slicz++;

	
	
}

$taliaakcja9=explode("@", $taliaakcja);

$key9=explode("*", $taliaakcja9[$slicz-1]);
	
	if($key9[11] == "slonce"){$slonceok=1;}
	
	if($key9[11] == "luk" or $key9[11] == "miecz" or $key9[11] == "balista"){$drogawolna=1;}
//var_dump($key9[11]);

//--------------------------------------

//------------------
//----interakcja sily
//------------------

//----------------------------------tromba


//okrzyk - miecz, luk, balista
$idp=$_GET["id"];
$okrzyk=$_GET["okrzyk"];
$pom="qwerty".$idp;

if(!empty($okrzyk)){

$taliaakcja=str_replace($pom,$okrzyk,$taliaakcja);
}

//-----------------------------------

$myfile=fopen("zywioly.txt", "r");
$stare = fread($myfile,filesize("zywioly.txt"));
fclose($myfile);

//-------------------------------------

$taliaakcjat=explode("@", $taliaakcja);

foreach ($taliaakcjat as $funkcjet){


$keyt=explode("*", $funkcjet);

$ilosc=0;
if($keyt[9]=="miecz" ){
	
	
$taliaakcja2=explode("@", $taliaakcja);




foreach ($taliaakcja2 as $funkcje3){

$key3=explode("*", $funkcje3);

if($key3[7]=="miecz"){
if(!strstr($stare,"miecz")){
//power=power+power;
$podw=$key3[5]+$key3[5];

$podklad="id*".$key3[1]."*power*".$key3[3];
$pomkij="id*".$key3[1]."*power*".$podw;
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);

}
}
}


}

$ilosc=0;
if($keyt[9]=="luk" ){

$taliaakcja2=explode("@", $taliaakcja);
foreach ($taliaakcja2 as $funkcje3){

$key3=explode("*", $funkcje3);

if($key3[7]=="luk"){
if(!strstr($stare,"luk")){
//power=power+power;
$podw=$key3[5]+$key3[5];

$podklad="id*".$key3[1]."*power*".$key3[3];
$pomkij="id*".$key3[1]."*power*".$podw;
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);


}
}
}
}
$ilosc=0;
if($keyt[9]=="balista" ){
	$taliaakcja2=explode("@", $taliaakcja);


foreach ($taliaakcja2 as $funkcje3){

$key3=explode("*", $funkcje3);

if($key3[7]=="balista"){
if(!strstr($stare,"balista")){
//power=power+power;
$podw=$key3[5]+$key3[5];

$podklad="id*".$key3[1]."*power*".$key3[3];
$pomkij="id*".$key3[1]."*power*".$podw;
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);


}
}
}
}
}


$taliaakcja2=explode("@", $taliaakcja);

foreach ($taliaakcja2 as $funkcje){//-----------glowna petla

//----------zerowanie zmiennych

//--------------------------------------------szpieg
$key=explode("*", $funkcje);

if($key[13]==2){
$szpieg=1;
$dowroga=$funkcje;

$funkcjep2=str_replace("szpieg*2","szpieg*0",$funkcje);
$taliaakcja=str_replace($funkcje,$funkcjep2,$taliaakcja);

}



//---------------------------------------porzoga

if($key[15] == "tak"){
$max=0;
$myfile=fopen("tabela.txt", "r");
$stare = fread($myfile,filesize("tabela.txt"));
fclose($myfile);
$tabelap2=explode("@", $stare);
foreach ($tabelap2 as $funkcjep2){

$keyp2=explode("*", $funkcjep2);

if ($keyp2[3]>$max){

$max=$keyp2[3];

}


}

$tabelap2b=explode("@", $stare);
foreach ($tabelap2b as $funkcjep2b){

$keyp2b=explode("*", $funkcjep2b);

if ($keyp2b[3]==$max){



//$podklad="id*".keyp2b[1]."*power*".keyp2b[3];

$stare=str_replace($funkcjep2b,"",$stare);

}


}

$fp = fopen("tabela.txt", "w");	
fputs($fp, $stare);
fclose($fp);

//------------------------------------------------tak nie


$funkcjep2=str_replace("tak","nie",$funkcje);
$taliaakcja=str_replace($funkcje,$funkcjep2,$taliaakcja);
}



//------------------------------podwojenie
if($key[17] != "none"){
	
$pod=0;
$idtab="";
foreach ($taliaakcja2 as $kolej){

$key2=explode("*", $kolej);


$addpom=$key2[3];


$idpomoc=$key2[1];



if($key2[17]==$key[17] and $key2[17]!=0){
$powerpom=$key2[5];
//$addpom=$addpom+$addpom;

$pod=$pod+1;
if(!strstr($stare,$key2[7])){
$idtab="id*".$idpomoc."*power*".$addpom."*powerbackdup*".$powerpom."@".$idtab;


}
}
}


if($pod>=2){
//powerx2


$petla=explode("@", $idtab);
foreach ($petla as $kij2){


$kij=explode("*", $kij2);
if(!empty($kij[5])){
$zm2=$key[5]+$key[5];
//$zm2=$zm+$zm;
$podklad="id*".$kij[1]."*power*".$kij[3]."*powerbackdup*";
$pomkij="id*".$kij[1]."*power*".$zm2."*powerbackdup*";



$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);

}

//var_dump($zm2);
}
}
}
$idtab="";




//------------------------------------------pogoda miecz
$taliaakcja33=explode("@", $taliaakcja);
if ($key[11] == "miecz"){

$myfile=fopen("zywioly.txt", "r");
$stare = fread($myfile,filesize("zywioly.txt"));
fclose($myfile);
$stare=$stare."@miecz";

$stare=str_replace("slonce","",$stare);
	$fp = fopen("zywioly.txt", "w");

	
fputs($fp, $stare);
fclose($fp);



		$podklad="*pogoda*miecz*";
$pomkij="*pogoda*0*";
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);

}

//-------------------------------------pogoda luk
if ($key[11] == "luk"){
$myfile=fopen("zywioly.txt", "r");
$stare = fread($myfile,filesize("zywioly.txt"));
fclose($myfile);
$stare=$stare."@luk";

$stare=str_replace("slonce","",$stare);
	$fp = fopen("zywioly.txt", "w");

	
fputs($fp, $stare);
fclose($fp);

		$podklad="*pogoda*luk*";
$pomkij="*pogoda*0*";
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);
}

//var_dump($key4[1]);
//-----------------------------------------pogoda balista
if ($key[11] == "balista"){


$myfile=fopen("zywioly.txt", "r");
$stare = fread($myfile,filesize("zywioly.txt"));
fclose($myfile);
$stare=$stare."@balista";

$stare=str_replace("slonce","",$stare);
	$fp = fopen("zywioly.txt", "w");

	
fputs($fp, $stare);
fclose($fp);

		$podklad="*pogoda*balista*";
$pomkij="*pogoda*0*";
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);

}


//----------------------------------------pogoda slonce


if ($key[11] == "slonce"){
	
	



	$fp = fopen("zywioly.txt", "w");

	
fputs($fp, "slonce");
fclose($fp);


			$podklad="*pogoda*slonce*";
$pomkij="*pogoda*0*";
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);
	
}




}//----koniec petli

//--------------------------------pogody
$myfile=fopen("tabela.txt", "r");
$przeciwnik = fread($myfile,filesize("tabelap2.txt"));
fclose($myfile);

$myfile=fopen("zywioly.txt", "r");
$stare = fread($myfile,filesize("zywioly.txt"));
fclose($myfile);
$petla=explode("@", $stare);
foreach ($petla as $kij){
	//-----------------------------------------------pogoda miecz
	if($kij=="miecz"){
		
		
		$taliaakcja33=explode("@", $taliaakcja);

foreach ($taliaakcja33 as $funkcje4){
$key6=explode("*", $funkcje4);
		
	
	if($key4[7]=="miecz"){
		
		$podw=1;
		$podklad="id*".$key4[1]."*power*".$key4[3];
$pomkij="id*".$key4[1]."*power*".$podw;
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);
		
		
	}
	
	}
	
			$taliaakcjaw=explode("@", $przeciwnik);

foreach ($taliaakcjaw as $funkcje4){
$key6=explode("*", $funkcje4);

if($key6[7]=="miecz"){
	$podw=1;
	$podklad="id*".$key6[1]."*power*".$key6[3];
$pomkij="id*".$key6[1]."*power*".$podw;
$przeciwnik=str_replace($podklad,$pomkij,$przeciwnik);
	
	}
	
	
}

	}
	
	//---------------------------pogoda luk
	
	
	if($kij=="luk"){
		
		
		$taliaakcja33=explode("@", $taliaakcja);

foreach ($taliaakcja33 as $funkcje4){
$key6=explode("*", $funkcje4);
		
	
	if($key4[7]=="luk"){
		
		$podw=1;
		$podklad="id*".$key4[1]."*power*".$key4[3];
$pomkij="id*".$key4[1]."*power*".$podw;
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);
		
		
	}
	
	}
	
			$taliaakcjaw=explode("@", $przeciwnik);

foreach ($taliaakcjaw as $funkcje4){
$key6=explode("*", $funkcje4);

if($key6[7]=="luk"){
	$podw=1;
	$podklad="id*".$key6[1]."*power*".$key6[3];
$pomkij="id*".$key6[1]."*power*".$podw;
$przeciwnik=str_replace($podklad,$pomkij,$przeciwnik);
	
	}
	
	
}

	}
	
	
	//-----------------------------pogoda balista
	
	
	
	if($kij=="balista"){
		
		
		$taliaakcja33=explode("@", $taliaakcja);

foreach ($taliaakcja33 as $funkcje4){
$key6=explode("*", $funkcje4);
		
	
	if($key4[7]=="balista"){
		
		$podw=1;
		$podklad="id*".$key4[1]."*power*".$key4[3];
$pomkij="id*".$key4[1]."*power*".$podw;
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);
		
		
	}
	
	}
	
			$taliaakcjaw=explode("@", $przeciwnik);

foreach ($taliaakcjaw as $funkcje4){
$key6=explode("*", $funkcje4);

if($key6[7]=="balista"){
	$podw=1;
	$podklad="id*".$key6[1]."*power*".$key6[3];
$pomkij="id*".$key6[1]."*power*".$podw;
$przeciwnik=str_replace($podklad,$pomkij,$przeciwnik);
	
	}
	
	
}

	}
	
	//-----------------------------------pogoda slonce
	if($kij=="slonce"){
		
			$taliaakcja33=explode("@", $taliaakcja);

foreach ($taliaakcja33 as $funkcje4){
$key4=explode("*", $funkcje4);
		
		$podklad="id*".$key4[1]."*power*".$key4[3];
$pomkij="id*".$key4[1]."*power*".$key4[5];
$taliaakcja=str_replace($podklad,$pomkij,$taliaakcja);
		
		

	}
	
	
	
	
	
	$taliaakcjaw=explode("@", $przeciwnik);

foreach ($taliaakcjaw as $funkcje4){
$key6=explode("*", $funkcje4);


	
	$podklad="id*".$key6[1]."*power*".$key6[3];
$pomkij="id*".$key6[1]."*power*".$key6[5];
$przeciwnik=str_replace($podklad,$pomkij,$przeciwnik);
	
	
	
	
}
	
	
	}
	
}


//

	$fp = fopen("tabela.txt", "w");

	
fputs($fp, $przeciwnik);
fclose($fp);

//
//------------------
//----interakcja wyswietlanie
//------------------
//var_dump($taliaakcja);
?>

<body background="tlo.jpg">
<center><h1>player2</h1><br>
<div><img src="mgla.jpg" class="srodek" id="obrazek" style="display:none;z-index:666;"></div>
<div class="ddd">

<table border="1">
<tr>
<td class="ccc" id="punkty2">punkty2</td>
</tr>

<tr>
<td class="ccc" id="tury2">
tura
<?
	$myfile=fopen("tura1.txt", "r");

$liczba = fread($myfile,filesize("tura1.txt"));
	echo $liczba;


?>

</td>
</tr>

<tr>
<td class="ccc" >

<?

	$myfile=fopen("pass1.txt", "r");
$koniec1 = fread($myfile,filesize("pass1.txt"));
fclose($myfile);

if($koniec1==1){
	
	echo "pass";
	
}
?>

</td>
</tr>


<tr>
<td class="ccc" id="punkty">punkty</td>
</tr>

<tr>
<td class="ccc" id="tury">tura <?
	$myfile=fopen("tura2.txt", "r");

$liczba = fread($myfile,filesize("tura2.txt"));
	echo $liczba;


?></td>
</tr>

<tr>
<td class="ccc" ><a href="index2.php?pas=1">pas</a></td>
</tr>
</table>





<table border="1">
<tr>
<td id="balistat2"></td>
<td id="balistap2"></td>
<td id="balistaw" class="aaa"></td>
</tr>
<tr>
<td id="lukt2"></td>
<td id="lukp2"></td>
<td id="lukw"  class="aaa"></td>
</tr>
<tr>
<td id="mieczt2"></td>
<td id="mieczp2"></td>
<td id="mieczw" class="aaa"></td>
</tr>
<tr>
<td class="bbb"></td>
<td class="bbb"></td>
<td class="bbb"></td>
</tr>
<tr>
<td id="mieczt"></td>
<td id="mieczp"></td>
<td id="miecz" class="aaa"></td>
</tr>
<tr>
<td id="lukt"></td>
<td id="lukp"></td>
<td id="luk" class="aaa"></td>
</tr>
<tr>
<td id="balistat"></td>
<td id="balistap"></td>
<td id="balista" class="aaa"></td>
</tr>
</table>
</div>
<table border="1"><tr><td  style="width:600" id="taliamoja"></>

</td></tr></table>

<?

//-------------------------------------
//--------------wlasciwe---------------
//-------------------------------------






//-------------------------------------
//--------------szpieg---------------
//-------------------------------------




if($szpieg==1){

$myfile=fopen("karty.txt", "r");
$stare = fread($myfile,filesize("karty.txt"));
fclose($myfile);

$stare2=explode(",", $stare);

$k1=$stare2[0];
$k2=$stare2[1];
$talia=$stare;
$talia=str_replace($k1.",","",$talia);

$talia=str_replace($k2.",","",$talia);

$fp = fopen("karty.txt", "w");
fputs($fp, $talia);
fclose($fp);


$myfile=fopen("kartyplayer2.txt", "r");
$stare = fread($myfile,filesize("kartyplayer2.txt"));
fclose($myfile);

$stare=$stare.$k1.",".$k2.",";

$fp = fopen("kartyplayer2.txt", "w");
fputs($fp, $stare);
fclose($fp);

//-------------------------------------dodwanie wroga talie
/*
$myfile=fopen("tabela.txt", "r");
$stare = fread($myfile,filesize("tabela.txt"));
fclose($myfile);


$stare=$stare.",@".$dowroga;

$fp = fopen("tabela.txt", "w");	
fputs($fp, $stare);
fclose($fp);
*/
}



echo "<script>";

//echo "$(\"#taliamoja\").html('<span class=\"dev\">');"

;
//-------------------------------------------------------------
//-----------------------------------------------------talia id
//-------------------------------------------------------------

$myfile=fopen("kartyplayer2.txt", "r");
$stare = fread($myfile,filesize("kartyplayer2.txt"));
fclose($myfile);
$stare2=explode(",", $stare);
foreach ($stare2 as $key9){

$myfile=fopen("prototyp.txt", "r");

$prototyp = fread($myfile,filesize("prototyp.txt"));
fclose($myfile);

$prototyp2=explode("@", $prototyp);
foreach ($prototyp2 as $funkcje){

$key=explode("*", $funkcje);

if($key9==$key[1]){

if(!empty($key9)){
	if($key9==33 or $key9==34 or $key9==35){

echo "$(\"#taliamoja\").html($(\"#taliamoja\").html()+'<span ><img width=\"50\" height=\"80\" src=\"k".$key9.".png\" onmouseover=\"wyswietl(\'k".$key9.".png\');\" onmouseout=\"schowaj();\" title=\"".$key[19]."\"></span><span style=\"display: inline-block\"><table style=\"border:0px;\"><tr><td style=\"width:50;height:26;\"><a href=\"index2.php?id=".$key9."&okrzyk=miecz\"><img title=\"mroz\" style=\"width:50;height:26;\" src=\"mroz.jpg\"  ></a></td></tr><tr><td style=\"width:50;height:26;\"><a href=\"index2.php?id=".$key9."&okrzyk=luk\"><img  title=\"mgla\" style=\"width:50;height:26;\" src=\"mgla.jpg\" class=\"traba\"></a></td ></tr><tr><td style=\"width:50;height:26;\"><a href=\"index2.php?id=".$key9."&okrzyk=balista\"><img title=\"deszcz\" style=\"width:50;height:26;\" src=\"deszcz.jpg\" class=\"traba\"></a></span>');";
	
	
	}else{
		
echo "$(\"#taliamoja\").html($(\"#taliamoja\").html()+'<a href=\"index2.php?id=".$key9."\"><img width=\"50\" height=\"80\" src=\"k".$key9.".png\" onmouseover=\"wyswietl(\'k".$key9.".png\');\" onmouseout=\"schowaj();\" title=\"".$key[19]."\"></a>');

";


		
		
	}
}
}
}
}

//-------------------------------------
//--------------wlasciwe---------------
//-------------------------------------


$taliaakcja3=explode("@", $taliaakcja);
foreach ($taliaakcja3 as $funkcje6){//----poczatek petli

$key=explode("*", $funkcje6);

$id=$key[1];



$sila=$key[3];

$silasuma=$silasuma+$key[3];



$miejsce=$key[7];



//---------------pogoda

$myfile=fopen("zywioly.txt", "r");
$stare = fread($myfile,filesize("zywioly.txt"));
fclose($myfile);
$petla=explode("@", $stare);
foreach ($petla as $kij){
if($kij == "miecz"){

echo "$('#mieczp').html(\"<img src='mroz.jpg'>\");";
}

if($kij == "luk"){

echo "$('#lukp').html(\"<img src='mgla.jpg'>\");";
}

if($kij == "balista"){

echo "$('#balistap').html(\"<img src='deszcz.jpg'>\");";
}


if($kij == "miecz"){

echo "$('#mieczp2').html(\"<img src='mroz.jpg'>\");";
}

if($kij == "luk"){

echo "$('#lukp2').html(\"<img src='mgla.jpg'>\");";
}

if($kij == "balista"){

echo "$('#balistap2').html(\"<img src='deszcz.jpg'>\");";
}
//----------------------slonce
if($kij == "slonce"){

echo "$('#mieczp').html('');";
echo "$('#lukp').html('');";
echo "$('#balistap').html('');";

echo "$('#mieczp2').html('');";
echo "$('#lukp2').html('');";
echo "$('#balistap2').html('');";
}

}
//-----------------------------tromba

if($key[9]=="miecz"){

echo "$('#mieczt').html(\"<img src='traba.jpg'>\");";
//echo "$('#mieczt2').html(\"<img src='traba.jpg'\">);";

}

if($key[9]=="luk"){

echo "$('#lukt').html(\"<img src='traba.jpg'>\");";
//echo "$('#lukt2').html(\"<img src='traba.jpg'>\");";

}

if($key[9]=="balista"){

echo "$('#balistat').html(\"<img src='traba.jpg'>\");";
//echo "$('#balistat2').html(\"<img src='traba.jpg'>\");";

}

//--------------------------------------------html
//--------------balista
if($miejsce=="balista"){

echo "$(\"#balista\").html($(\"#balista\").html()+'<span><img src=\"k".$id.".png\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$sila."</font></span></span>');

";
}

//--------------luk
if($miejsce=="luk"){
echo "$(\"#luk\").html($(\"#luk\").html()+'<span><img src=\"k".$id.".png\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$sila."</font></span></span>');

";
}

//--------------miecz
if($miejsce=="miecz"){
echo "$(\"#miecz\").html($(\"#miecz\").html()+'<span><img src=\"k".$id.".png\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$sila."</font></span></span>');

";
}


}//key i key2 --- koniec petli


echo "$('#punkty').html('<h1>".$silasuma."</h1>');";

//--------------------------------------------
//-----------------wrog-----------------------
//--------------------------------------------
$myfile=fopen("tabela.txt", "r");
$stare = fread($myfile,filesize("tabela.txt"));
fclose($myfile);


$taliaakcja3=explode("@", $stare);
foreach ($taliaakcja3 as $funkcje6){//----poczatek petli

$key=explode("*", $funkcje6);

//------------------------------------------------------------
//---------------------wyswietlanie wrog----------------------
//------------------------------------------------------------
//---------------pogoda
/*
if($key[11] == "miecz"){

echo "$('#mieczp').html(\"<img src='mroz.jpg'>\");";
}

if($key[11] == "luk"){

echo "$('#lukp').html(\"<img src='mgla.jpg'>\");";
}

if($key[11] == "balista"){

echo "$('#balistap').html(\"<img src='deszcz.jpg'>\");";
}


if($key[11] == "miecz"){

echo "$('#mieczp2').html(\"<img src='mroz.jpg'>\");";
}

if($key[11] == "luk"){

echo "$('#lukp2').html(\"<img src='mgla.jpg'>\");";
}

if($key[11] == "balista"){

echo "$('#balistap2').html(\"<img src='deszcz.jpg'>\");";
}
//----------------------slonce
if($key[11] == "slonce"){

echo "$('#mieczp').html('');";
echo "$('#lukp').html('');";
echo "$('#balistap').html('');";

echo "$('#mieczp2').html('');";
echo "$('#lukp2').html('');";
echo "$('#balistap2').html('');";
}
*/
//-----------------------------tromba

if($key[9]=="miecz"){

//echo "$('#mieczt').html(\"<img src='traba.jpg'>\");";
echo "$('#mieczt2').html(\"<img src='traba.jpg'>\");";

}

if($key[9]=="luk"){

//echo "$('#lukt').html(\"<img src='traba.jpg'>\");";
echo "$('#lukt2').html(\"<img src='traba.jpg'>\");";

}

if($key[9]=="balista"){

//echo "$('#balistat').html(\"<img src='traba.jpg'>\");";
echo "$('#balistat2').html(\"<img src='traba.jpg'>\");";

}

//------------------------------------------------------------
//---------------------wyswietlanie wrog----------------------
//------------------------------------------------------------


$miejsce=$key[7];
$sila=$key[3];
$silasuma2=$silasuma2+$key[3];
$id=$key[1];
if($miejsce=="balista"){
echo "$(\"#balistaw\").html($(\"#balistaw\").html()+'<span><img src=\"k".$id.".png\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$sila."</font></span></span>');

";
}
//echo "alert('".$sila."');";
//--------------luk
if($miejsce=="luk"){
echo "$(\"#lukw\").html($(\"#lukw\").html()+'<span><img src=\"k".$id.".png\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$sila."</font></span></span>');

";
}

//--------------miecz
if($miejsce=="miecz"){
echo "$(\"#mieczw\").html($(\"#mieczw\").html()+'<span><img src=\"k".$id.".png\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$sila."</font></span></span>');

";
}

}


echo "$('#punkty2').html('<h1>".$silasuma2."</h1>');";

echo "</script>";
//------------------
//--interakcja zapis
//------------------

$fp = fopen("tabelap2.txt", "w");
fputs($fp, $taliaakcja);

fclose($fp);

//------------------
//----koniec php----
//------------------
echo "<br>";
//var_dump($taliaakcja);
//------------------------------------------kolej




$myfile=fopen("pass2.txt", "r");
$koniec1 = fread($myfile,filesize("pass2.txt"));
fclose($myfile);

$myfile=fopen("pass1.txt", "r");
$koniec2 = fread($myfile,filesize("pass1.txt"));
fclose($myfile);


if($koniec1==1 and $koniec2==1){
	if($silasuma>$silasuma2){
	//echo "<script>alert('wygral player1');</script>";
	$p="player2 wygral";
	

	
	
	}
		if($silasuma<$silasuma2){
	//echo "<script>alert('wygral player2');</script>";
	$p="player1 wygral";

	
	
	}
	
		if($silasuma==$silasuma2){
	//echo "<script>alert('remis');</script>";
	$p="remis";
	}
	echo '<meta http-equiv="refresh" content="0; url=czekaj2.php?wynik='.$p.'">';
}


?>

<script>

$( document ).ready(function() {


<?


if(!empty($_GET["id"])){
	
	$punkt=1;
$fp = fopen("kolej.txt", "w");
fputs($fp, $punkt);
fclose($fp);

}

if($_GET["ko"]==3){
	
		$punkt=3;
$fp = fopen("kolej.txt", "w");
fputs($fp, $punkt);
fclose($fp);
	
echo "$('#taliamoja').show();";
}else{
	
	
	echo "$('#taliamoja').hide();";
	
	
}

?>


var koniec=0;

function reflesh(){
	koniec=0;
$.get( "kolej.php", function( data ) {

	if(data==2){
		
		window.location="index2.php?ko=3";
		
	}
	
		if(data==5){
		
		window.location="index2.php?ko=5";
		
	}
});
$.get( "pass1.php", function( data ) {

	if(data==1){
		
		koniec=koniec+1;
				if(koniec==2){
window.location="index2.php";
}
	}
	
	
	
	
});


$.get( "pass2.php", function( data ) {

	if(data==1){
		
		koniec=koniec+1;
				if(koniec==2){
window.location="index2.php";
}
		//window.location="index3.php?ko=2";
	}
	
	
	
	
});




}

setInterval(reflesh, 1000);
<?

	$myfile=fopen("pass1.txt", "r");
$koniec1 = fread($myfile,filesize("pass1.txt"));
fclose($myfile);

if($koniec1==1){
	
echo "$('#taliamoja').show();";
	
}


?>

});
</script>

<?

$myfile=fopen("pass2.txt", "r");
$stare = fread($myfile,filesize("pass2.txt"));
fclose($myfile);
if ($stare==1){
	
	$punkt=1;
$fp = fopen("kolej.txt", "w");
fputs($fp, $punkt);
fclose($fp);

echo "<script>$('#taliamoja').hide();</script>";
}


if($_GET["pas"]==1){
	
		$punkt=1;
$fp = fopen("pass2.txt", "w");
fputs($fp, $punkt);
fclose($fp);
	
	
			$punkt=1;
$fp = fopen("kolej.txt", "w");
fputs($fp, $punkt);
fclose($fp);
	
	
}
//echo "<script>$('#taliamoja').show();</script>";
?>
<!--
//---------notes
tromba- 33,34,35

#mieczw - miejsce na karte wroga miecz
#lukw - miejsce na karte wroga luk
#balistaw - miejsce na karte wroga balista

#miecz - miejsce na karte swojom miecz
#luk - miejsce na karte swoja luk
#balista - miejsce na karte swoja balista


#mieczp - miejsce na pogode mruz
#lukp - miejsce na pogode mgła
#balistap - miejsce na pogode deszcz

#mieczp2 - miejsce na pogode mruz gracz2
#lukp2 - miejsce na pogode mgła gracz2
#balistap2 - miejsce na pogode deszcz gracz2

#punkty' - miejsce na sume punktow jako

#taliamoja - miejsce na talie kart same ID

#mieczt - miejsce na trombe miecz player 1
#lukt - miejsce na trombe luk player 1
#balistat - miejsce na trombe balista player1

#mieczt2 - miejsce na trombe miecz player 2
#lukt2 - miejsce na trombe luk player 2
#balistat2 - miejsce na trombe balista player 2



kartyplayer.txt  - lista kart na stanie  same ID

kartyplayer2.txt - lista kart na stanie  same ID wroga

tabelap2.txt - talia kart na stul zywiolow wroga


tabela.txt - talia kart na stul do zywiolow player 1


karty.txt - lista kart wszstkich same ID wszystkich

prototyp.txt - lista wszstkich kart









w*w2*@
w3*w4*@w*w2*@


taliaakcja=key2[0]."*".key2[1]."@".taliaakcja;


w*w2*@w3*w4*@-najnowsze na poczatku



w*w2*@
w3*w4*@w*w2*@


taliaakcja="@".taliaakcja."*".key2[0]."*".key2[1].;

w*w2*@w3*w4*@-najnowsze na koncu



zamaluj punktacje

str replace do sprawdzenia

lewy fragment calosci zaienia na prawy

inferno bedzie jako zwykla karta na stole



if(empty($_SESSION["kart"])){
$_SESSION["kart"]=10;
}


//echo "$('#taljamoja').html($('#taliamoja').html()+'<a href='index2.php?id=".$key9."'><img src=\'k".$key9.".png\' alt=\'".$key[19]."\'></a>'";


trzaskajacy mroz - miecz
mgla - luk
deszcz - balista
-->