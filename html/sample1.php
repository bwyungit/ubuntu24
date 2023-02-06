<html>
 <head>
  <title>PHP 테스트</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 <br>
<?php echo $_SERVER['HTTP_USER_AGENT']; ?>
<br><br>
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)


<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo 'You are using Internet Explorer.<br>';
}
?>



</body>
</html>
