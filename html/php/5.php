<?php
    $mysql_hostname = 'localhost';
    $mysql_username = 'www6';
    $mysql_password = '1488';
    $mysql_port = '3306';
    $mysql_charset = 'utf8';
    $mysql_db = 'gnuboard';

    //연동 부분이다.
    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password);
    mysqli_select_db($connect,$mysql_db);

    if($connect->connect_errno){
        echo '[연결실패] : '.$connect->connect_error.'';
    }else{
        //echo '[연결성공!]';
    }

   // 세션 시작
   session_start();

   // 쿼리문 생성
   $sql = "select * from user";

   // 쿼리 실행 결과를 $result에 저장
   $result = mysqli_query($connect, $sql);
   // 반환된 전체 레코드 수 저장.
   $total_record = mysqli_num_rows($result);

   // JSONArray 형식으로 만들기 위해서...
   echo "{\"status\":\"OK\",\"num_results\":\"$total_record\",\"results\":<br><br>[";

   // 반환된 각 레코드별로 JSONArray 형식으로 만들기.
   for ($i=0; $i < $total_record; $i++)
   {
      // 가져올 레코드로 위치(포인터) 이동
      mysqli_data_seek($result, $i);


      $row = mysqli_fetch_array($result);

echo "{\"id\":$row[id],\"name\":\"$row[name]\",\"updated_date\":\"$row[updated_date]\"}";



   // 마지막 레코드 이전엔 ,를 붙인다. 그래야 데이터 구분이 되니깐.
   if($i<$total_record-1){
      echo ",";
   }

   }
   // JSONArray의 마지막 닫기
   echo "]}";
?>
