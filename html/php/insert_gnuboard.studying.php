
<title>insert_gnuboard.studying</title>

<a href="/delete_studying.html">delete_studying.html </a><br>

<?php
//filename=php/insert_gnuboard.studying.php

//echo "<a href='/delete_studying.html'>delete_studying.html </a><br>";

    $mysql_hostname = 'localhost';
    $mysql_username = 'www6';
    $mysql_password = '1488';
    $mysql_port = '3306';
    $mysql_charset = 'utf8';
    $mysql_db = 'gnuboard';
    $mysql_table = 'studying';

    //연동 부분이다.
    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password,$mysql_db);

    if($connect->connect_errno){
        echo '[연결실패] : '.$connect->connect_error.'\n';
    }else{
        echo '[연결성공!]<br><br>';
    }

   // 세션 시작
   session_start();
   
   //입력내용 중복확인
   $sql = "select category,subject,contents from $mysql_table where category='$_GET[category]' and subject ='$_GET[subject]' and contents='$_GET[contents]';";
   $result = mysqli_query($connect, $sql);
   $records_count = mysqli_num_rows($result);
   if ($records_count>0){
      echo "입력할 내용입니다.<br>";
      echo " &nbsp; category : $_GET[category]<br>";
      echo " &nbsp; subject :  $_GET[subject]<br>";
      echo " &nbsp; contents : $_GET[contents]<br>";
      echo "<br>위 내용은 이미 입력한 내용입니다.<br>";
//     exit;
    goto selectquery;
     }
   
   
   // insert 쿼리문 실행 
   //$insert_name=$_name;//"hong";
   $sql = "insert into $mysql_table (category,subject,contents) values('$_GET[category]','$_GET[subject]','$_GET[contents]');";
   $in = mysqli_query($connect, $sql);
   if ($in==1){echo "[입력성공]";};
   echo "입력한 내용입니다.<br>";
   echo " &nbsp; category : $_GET[category]<br>";
   echo " &nbsp; subject :  $_GET[subject]<br>";
   echo " &nbsp; contents : $_GET[contents]<br>";
   
   selectquery:
   // select 쿼리문 실행
   echo "<br>  $mysql_table 테이블을 조회하겠습니다.<br>";
   
   $sql = "select category,subject,contents,date_format(updated_date,'%y-%m-%d')as date from $mysql_table order by updated_date desc;";
   echo "  query : ",$sql;

   $result = mysqli_query($connect, $sql);
   $total_record = mysqli_num_rows($result);
   $fields_count = mysqli_num_fields($result);
   $fields = mysqli_fetch_fields($result);
   
   echo "<br><br>fields_count : ",$fields_count; 

   echo "<br><br>"; 
   echo "records_count : ",$total_record;
   
   echo "<br><br>"; 
   echo "<table border=1>";
   echo "<tr>";
   foreach ($fields as $val) {
	   echo "<th bgcolor=#99cc00>";
	   printf("%s\n",   $val->name);
  //          printf("Table:     %s\n",   $val->table);
    //        printf("Max. Len:  %d\n",   $val->max_length);
      //      printf("Length:    %d\n",   $val->length);
        //    printf("charsetnr: %d\n",   $val->charsetnr);
          //  printf("Flags:     %d\n",   $val->flags);
	   //printf("Type:      %d\n\n", $val->type);
	   echo "</th>";//
        }
  echo "<th bgcolor=#99cc00>수정</tr>";
  
   for ($i=0; $i < $total_record; $i++){
	   
   $row = mysqli_fetch_array($result);
	   
	   //mysqli_data_seek($result, $i);
   echo "<tr> <td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td><a>수정</a></td> </tr>";
   }
    
   echo "</table>";
   

   echo "<br/><br/>Memory Usage Before 'mysqli_free_result(".'$result'.")' = ".memory_get_usage(false);
   echo "<br>executing mysqli_free_result";
   mysqli_free_result($result);// drop memory
   echo "<<br/>Memory Usage After 'mysqli_free_result(".'$result'.")' = ".memory_get_usage(false);


   echo "<br/><br/>Memory Usage Before 'mysqli_close(".'$connect'.")' = ".memory_get_usage(false);
   echo "<br>executing mysqli_free_result";
   $q = mysqli_close($connect);
   if( $q == "1" ){echo "<br>connection closed by 1. bye!";};
   if( $q == "true" ){echo "<br>connection closed by true. bye!";};
   //echo $q;
   echo "<br>Memory Usage After 'mysqli_close(".'$connect'.")' = ".memory_get_usage(false);
?>
