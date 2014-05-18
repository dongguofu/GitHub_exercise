<?php
 $link = mysqli_connect('localhost', 'root', '');
 if (!$link) {
 die('接続失敗！'.mysqli_connect_error());
 } else {
 echo '接続成功！';
 }
?>
