<html>
 <head>
  <title>PHP 테스트</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'Internet Explorer를 사용하고 있습니다.<br />';
}?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos()는 false가 아닌 것을 반환했습니다.</h3>
<p>Internet Explorer를 사용하고 있습니다.</p>
<?php
} else {
?>
<h3>strpos()는 false를 반환했습니다.</h3>
<p>Internet Explorer를 사용하고 있지 않습니다.</p>
<?php
}?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
}
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
    echo 'You are using Internet Explorer.<br />';
}
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
    echo 'You are using Internet Explorer.<br />';
}
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
     echo 'You are using Edge.<br />';
}
?>


 </body>
</html>