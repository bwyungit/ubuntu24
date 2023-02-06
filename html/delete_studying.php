<?php
echo "$_GET[subject]";
    $mysql_hostname = 'localhost';
    $mysql_username = 'www6';
    $mysql_password = '1488';
    $mysql_port = '3306';
    $mysql_charset = 'utf8';
    $mysql_db = 'gnuboard';

    //연동 부분이다.
    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password,$mysql_db);

    if($connect->connect_errno){
        echo '[연결실패] : '.$connect->connect_error.'\n';
    }else{
        echo '[연결성공!] ';
        echo '<br><br>';
    }
    
    
    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password,$mysql_db);
    
    $category = $_GET['category'];
    $subject = $_GET['subject'];
    
         //delete from studying where category =22;
   //$sql = "select category,subject,contents from studying where category='$_GET[category]' and subject='$_GET[subject]';";
   $sql = "delete from studying where ( category = '$category' and subject = '$subject' ) ;";
   echo $sql;
   
      $result = mysqli_query($connect, $sql);
   
   if($result === true){
        echo "<br><br>delete successful<br><br>";
    }else{
        echo "<br><br>delete fail";
        echo '<br><br>';
    }
   
   
   
   
  
  
  
   $q = mysqli_close($connect);
   if( $q == "1" ){echo "<br>connection closed by 1. bye bye!<br>";};
   if( $q == "true" ){echo "<br>connection closed by true. bye bye!<br>";};
   echo $q;
  
  
  printf("<br>SERVER['REMOTE_ADDR'] : %d\n", $_SERVER['REMOTE_ADDR']);
    printf("<br>SERVER['DOCUMENT_ROOT'] : %d\n", $_SERVER['DOCUMENT_ROOT']);
    printf("<br>SERVER['HTTP_USER_AGENT'] : %d\n", $_SERVER['HTTP_USER_AGENT']);

  
  





?>

//<script>
//document.location.href="./delete_studying.html";
//</script>";