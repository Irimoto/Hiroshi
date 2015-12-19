<form action="" metho="get">
<d1>
<dt>日にち</dt>
<dd>
<?php echo(date('n')); ?>月
<select name="day" id="day">
<?php
for ($day=1; $day<=date('t'); $day++){
	echo('<option value="' . $day . '">' .$day .'日</option>');
}
?>
</select>
</dd>
</d1>
<input type="submit" value="送信する" />
</form>