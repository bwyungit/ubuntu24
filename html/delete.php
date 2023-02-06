<?php 

$conn = mysqli_connect("localhost", "gnuboard","1488", "gnuboard");
$sql = "delete from user where id='3'";
$result = mysqli_query($conn,$sql);


echo "successful";
echo "<br>";
echo  $sql;


$sql = "select * from user";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
echo '<h4>'.$row['id'].': '.$row['name'].'</h4>';
//echo '<h1>'.$row['name'].'</h1>';
}

$conn.close();

?>


