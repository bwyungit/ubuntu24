<?php 

$conn = mysqli_connect("localhost", "gnuboard","1488", "gnuboard");
$sql = "select * from user order by id ";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
echo '<h1>'.$row['id'].'</h1>';
echo ''.$row['name'].' : ';
echo ''.$row['updated_date'].'';
}
$conn.close();
?>


