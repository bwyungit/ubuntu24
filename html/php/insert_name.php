<?php
//filename=php/insert_name.php

    $mysql_hostname = 'localhost';
    $mysql_username = 'www6';
    $mysql_password = '1488';
    $mysql_port = '3306';
    $mysql_charset = 'utf8';
    $mysql_db = 'gnuboard';
    $mysql_table = 'user';

    //연동 부분이다.
    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password,$mysql_db);

    if($connect->connect_errno){
        echo '[연결실패] : '.$connect->connect_error.'\n';
    }else{
        echo '[연결성공!]<br><br>';
    }

   // 세션 시작
   session_start();
   $_name = "$_GET[name]";
    // 쿼리문 생성
   //$insert_name=$_name;//"hong";
   $sql = "insert into $mysql_table (name) values('$_GET[name]');";
   $in = mysqli_query($connect, $sql);
//   echo $in;
   echo "$_GET[name]","을 $mysql_db.$mysql_table 테이블에 입력했습니다!<br>";
   echo "$_name","  을 입력했습니다!<br>";//   echo $_name; 와 동일

   //$q = mysqli_close($connect);
   //echo "접속을 종료합니다!";
   
   echo "<br>$mysql_table 테이블을 조회하겠습니다.<br>";

   // mariadb connect again
   
   //$connect =  mysqli_connect($mysql_hostname, $mysql_username, $mysql_password,$mysql_db);

   $sql = "select * from user;";
   echo "query : ",$sql;
   $result = mysqli_query($connect, $sql);
   // 반환된 전체 레코드 수 저장.
   $total_record = mysqli_num_rows($result);

   // JSONArray 형식으로 만들기 위해서...
   //echo "\"status\":\"OK\",\"num_results\":\"$total_record\",\"results\"";

   $fields_count = mysqli_num_fields($result);
   $fields = mysqli_fetch_fields($result);
   
   echo "<br><br>fields_count : ",$fields_count; 

   echo "<br><br>"; 
   echo "records_count : ",$total_record;
   
   echo "<br><br>"; 
   echo "<table border='1'>";
   echo "<tr>";
   foreach ($fields as $val) {
	   echo "<td>";
	   printf("%s\n",   $val->name);
  //          printf("Table:     %s\n",   $val->table);
    //        printf("Max. Len:  %d\n",   $val->max_length);
      //      printf("Length:    %d\n",   $val->length);
        //    printf("charsetnr: %d\n",   $val->charsetnr);
          //  printf("Flags:     %d\n",   $val->flags);
	   //printf("Type:      %d\n\n", $val->type);
	   echo "</td>";//
        }
  echo "</tr>";
  
   for ($i=0; $i < $total_record; $i++){
	   
   $row = mysqli_fetch_array($result);
	   
	   //mysqli_data_seek($result, $i);
   echo "<tr><td>$row[0]</td><td>".nl2br($row[1])."</td>
   <td>$row[2]</td></tr>";
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
