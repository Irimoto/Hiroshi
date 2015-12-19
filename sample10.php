<form action="" method="get">
<d1>
<dt>商品</dt>
<dd>
<?php 
$items = array('a-1' => 'ガム', 'b-1'=>'チョコレート', 'c-3'=>'クッキー' );

foreach ($items as $itemKey => $itemValue) {
	echo ('<input type="checkbox" id="' . $itemKey . '" value="' .$itemKey .'"/>
		<label for="'. $itemKey.'">'.$itemValue.'</label> ');
}
?>
</dd>
</d1>
<input type="submit" value="送信する" />
</form>

<select>
<?php
$platforms = array('win'=>'Windows', 'mac'=>'Machintosh', 'iphone'=>'iPhone', 
	'ipad'=>'iPad', 'android'=>'Android');
foreach ($platforms as $platformId => $platformValue) {
?>

<option value="<?php echo $platformId; ?>"><?php echo $platformValue; ?>
</option>
<?php
}
?>
</select>
