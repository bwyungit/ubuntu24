<?php 

$conn = mysqli_connect("localhost", "gnuboard","1488", "gnuboard");
$sql = "insert into user (id, name) values ('3', 'www6')";
$result = mysqli_query($conn,$sql);


echo "successful";
echo "<br>";
echo  $sql;


$sql = "select * from user order by updated_date";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
echo '<h4>'.$row['id'].': '.$row['name'].':'.$row['updated_date'].'</h4>';
//echo '<h1>'.$row['name'].'</h1>';
}

$conn.close();

?>


