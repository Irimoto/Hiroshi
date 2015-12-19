<?php
$age = mb_convert_kana($_REQUEST['age'], 'n', 'UTF-8');

if(is_numeric($age)){
	echo($age.'歳');
}else{
	echo('※年齢は数字でご記入ください');
}
?>