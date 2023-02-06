<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
<?
header("Content-Type: text/html; charset=utf-8");

//$var=array(0,1,2,3,4);
//echo $var[2];

echo "<br>argv";
echo "<br>argc";


echo "<br>";
$arr=['argv','PHP_SELF','SERVER_NAME','SERVER_ADDR','SERVER_SOFTWARE','SERVER_PROTOCOL',
          'REQUEST_METHOD','REQUEST_TIME','QUERY_STRING','DOCUMENT_ROOT','HTTPS','REMOTE_ADDR','REMOTE_HOST',
          'REMOTE_PORT','REMOTE_USER','REDIRECT_REMOTE_USER','SCRIPT_FILENAME','SERVER_ADMIN','SERVER_PORT',
          'SERVER_SIGNATURE','PATH_TRANSLATED','SCRIPT_NAME','REQUEST_URI','PHP_AUTH_DIGEST','PHP_AUTH_USER',
          'PHP_AUTH_PW','AUTH_TYPE','PATH_INFO','ORIG_PATH_INFO'];

echo "arr °³¼ö : ".count($arr);

//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo "<br>$arr[0]<br>";
//echo "<br>$arr[1]<br>";
//echo "<br>$arr[1] :". $_SERVER['SERVER_NAME'];

//printf("Connect failed: %s\n", $_SERVER['SERVER_NAME']);

for ($i=0;$i<count($arr);$i++){
  printf("<br>SERVER[$arr[$i]] : %s\n ", $_SERVER[$arr[$i]]);
}
//printf("<br>SERVER[$arr[1]] : %s\n ", $_SERVER[$arr[1]]);
//printf("<br>SERVER[$arr[2]] : %s\n ", $_SERVER[$arr[2]]);


?>
</body>

</html>

