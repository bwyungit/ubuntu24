
<?php 

$conn = mysqli_connect("localhost", "gnuboard","1488", "gnuboard");
$sql = "select * from user";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['id'].'</h1>'


?>


<? php bbb(); ?>

