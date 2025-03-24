
<script type="text/javascript" src="jquery.js"></script>


<style>

td {

width:100;
height:80;

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
height:240;

}

.ddd {
display: flex;align-items: center;
    justify-content: center;
	}
	
	img {
	
	height:80;
	width:50;
	
	}
	
		.srodek {
	
	width:300;
height:400;

position:absolute;

margin-left:-150;
	
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
<body bgcolor="000000">
<center>
<div><img src="mgla.jpg" class="srodek" id="obrazek" style="display:none;z-index:666;"></div>
<div class="ddd">

<table border="1">
<tr>
<td class="ccc" id="punkty2">punkty2</td>
</tr>
<tr>
<td class="ccc" id="punkty">punkty</td>
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

<script>
<?
echo "$(\"#taliamoja\").html($(\"#taliamoja\").html()+'<a href=\"cos.html\"><img src=\"mgla.jpg\" onmouseover=\"wyswietl(\'mgla.jpg\');\" onmouseout=\"schowaj();\" title=\"aaaaaa\"></a>');";

echo "$(\"#taliamoja\").html($(\"#taliamoja\").html()+'<a href=\"cos.html\"><img src=\"mgla.jpg\" onmouseover=\"wyswietl(\'mgla.jpg\');\" onmouseout=\"schowaj();\" title=\"aaaaaa\"></a>');";

$punkt=5;

echo "$(\"#miecz\").html($(\"#miecz\").html()+'<span><img src=\"traba.jpg\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$punkt."</font></span></span>');";

$punkt=4;
echo "$(\"#miecz\").html($(\"#miecz\").html()+'<span><img src=\"traba.jpg\"><span style=\"position:absolute;margin-left:-50;\"><img src=\"kulka.png\" style=\"width:30;height:30;\" ><font style=\"position:absolute;margin-left:-22;margin-top:5;\">".$punkt."</font></span></span>');";
?>
</script>

