this page is ./php/php_html.php
<?php
$txt = "<br><br>Hello<br>";
print $txt;

?>

<html>

<head>
<meta charset="UTF-8">
<title>./php/php_html.php</title>

<style>
 table{
	border=1;
	/*border-collapse: collapse;*/
 }
  thead{border:1px solid black};
  td{border:1px solid black}
</style>

</head>

<body>


<?php print "<h1>".$txt."</h1>"; ?>


<table>
<caption>test</caption>
<thead>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
</thead>

<tbody>
<tr>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
</tr>

<tr>
<td>5</td>
<td>6</td>
<td>7</td>
<td>8</td>
</tr>
</tbody>
</table>



</body>







</html>

