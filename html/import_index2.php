<html>
<head>
	<meta charset="utf-8">
	<title>insert into gnuboard.studying</title>
<style>
.parent{
display: flex;
background:red;
}
.left{
flex: 1;
background: white;
}
.right{
flex: 3;

}




</style>

</head>
<body>
</body>
<p>this page is ./index2.html</p>
<form method="get" accept-charset="utf-8" action="import_index2.php">
	<fieldset>
	<legend>insert into gnuboard.studying</legend>
		<label> category: <input type="text" name="category" ></label>
			<label for ="subject">subject:</label>
		<input type="text" name="subject" id="subject" >
		
	contents: <input type="text" name="contents" style="width:500px">
	<input type="submit" value="제출" style="height:30px;width:50px"  / >
	</fieldset>
</form>
<div class="parent" >
		<div class="left">
		<a href="php/2.php">php/2.php</a><br>
	<a href="3.php">3.php </a><br>
	<a href="php/4.php">php/4.php </a><br>
	<a href="php/5.php">php/5.php </a><br>
	<a href="php/insert.php">php/insert.php </a><br>
	<a href="php/insert_name.php">php/insert_name.php </a><br>
	<a href="php/delete.php">php/delete.php </a><br>
		</div>
		<div class="right">


<?php
//filename=php/insert_gnuboard.studying.php

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
   $_name = "$_GET[name]";
    // 쿼리문 생성
   //$insert_name=$_name;//"hong";
   $sql = "insert into $mysql_table (category,subject,contents) values('$_GET[category]','$_GET[subject]','$_GET[contents]');";
   $in = mysqli_query($connect, $sql);
//   echo $in;
   echo "입력내용입니다.<br>";
   echo " &nbsp; category : $_GET[category],<br>";
   echo " &nbsp; subject :  $_GET[subject],<br>";
   echo " &nbsp; contents : $_GET[contents]<br>";
   
   
   echo "<br>  $mysql_table 테이블을 조회하겠습니다.<br>";

   

   $sql = "select category,subject,contents,date_format(updated_date,'%y-%m-%d')as date from $mysql_table order by updated_date desc;";
   echo "  query : ",$sql;

   $result = mysqli_query($connect, $sql);
   // 반환된 전체 레코드 수 저장.
   $total_record = mysqli_num_rows($result);

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
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
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











		</div>
</div>
</html>
