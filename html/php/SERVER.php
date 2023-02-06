
<?
$var=array(0,1,2,3,4);
echo $var[2];

echo "<br>";

$arr=array('PHP_SELF','SERVER_NAME');


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo "<br>$arr[0]<br>";
echo "<br>$arr[1]<br>";
echo "<br>$arr[1] :". $_SERVER['SERVER_NAME'];

printf("Connect failed: %s\n", $_SERVER['SERVER_NAME']);

printf("<br>SERVER[$arr[0]] : %s\n ", $_SERVER[$arr[0]]);
printf("<br>SERVER[$arr[1]] : %s\n ", $_SERVER[$arr[1]]);
?>
