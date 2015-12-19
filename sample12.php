ご予約日:<br />
<?php
foreach ($_REQUEST['reserve'] as $reserve ) {
	echo(htmlspecialchars($reserve, ENT_QUOTES) .'<br />' );
}
?>