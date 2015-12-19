<?php
$zip = mb_convert_kana($_REQUEST['zip'], 'a', 'UTF-8');

if(preg_match("/¥A¥d{3}¥-¥d{4}¥z/", $zip)){
	echo('郵便番号:〒' . $zip);
}else{
	echo('※郵便番号は123-4567の形式でご記入ください');
}
?>