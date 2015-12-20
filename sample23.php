<?php
$file = $_FILES['my_img'];
echo('ファイル名(name): ' . $file['name'] . '<br />');
echo('ファイルタイプ(type): ' . $file['type'] . '<br />');
echo('アップロードしたファイル(tmp_name): ' . $file['tmp_name'] . '<br />');
echo('エラー内容(error): ' . $file['error'] . '<br />');
echo('サイズ(size): ' . $file['size'] . '<br />');

//ファイルアップロードの処理をする
$ext = substr($file['name'], -4);
if ($ext == '.gif' || $ext == '.jpg' || $ext== '.png'){
	$filePath = './user_img/' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filePath);
	echo('<img src="' . $filePath . '" />');
}else{
	echo('※拡張子が.gif, .jpg, .pngのいずれかのファイルをアップロードしてください');
}
?>