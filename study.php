<?php print('PHPを勉強中です！')?>
<pre>
	<?php
	print('1行目の文章です');
	print("¥n");
	print('2行目の文章です');
	?>
</pre>
<?php
echo('<h2 style="font-size: 110%; font-weight: bold ">画面にHTMLを表示する</h2>');
echo('<p>phpはHTMLの中に埋め込んで記述することができます</p>');
echo('<p>改行するときは、<br />brタグを記述します。</p>');
?>

<?php
echo('現在は ' . date('G時　i分 s秒') . ' です');
?>

<?php
echo(date('s'));
?>

<?php echo(date('i'));?>
<br/>
<?php
echo(date('G'));
echo('時');
echo(date('i'));
echo('分');
echo(date('s'));
echo('秒');
?>

<?php
echo(date('G') . '時' . date('i') .'分' .date('s') .'秒');
?>
<br />
<?php echo(date('G時　i分 s秒')); ?>
<br />
<?php echo('現在は'.date('G時　i分 s秒').'です');?>
<br />
<?php 
date_default_timezone_set('Asia/Tokyo');
echo('今年は'.date('Y年　n月 j日').'です');
?>