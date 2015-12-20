<table>
<?php
for ($i=1; $i <=10 ; $i++) { 
	if($i % 2){
		echo('<tr style="background-color: #bce0f2">');
	}else{
		echo('<tr>');
	}
	echo('<td>' .$i. '</td>');
	echo('<td>' .$i. '行目の情報です</td>');
	echo('</tr>');
}
?>
</table>
<br />
<?php
$week = array('金','土','日','月','火','水','木');
for ($i=1; $i <=31 ; $i++) { 
	echo($i. '日('.$week[$i%7].')<br />');
}
?>