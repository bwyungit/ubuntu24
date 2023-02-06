<?php
 session_save_path("./session/");
 session_start();
 
 echo "session_id =".session_id();
 echo "<br>";
 
 echo "\$_SESSION['userId'] = ".$_SESSION['userId'];
 echo "<br>";
 echo "\$_SESSION['userName'] = ".$_SESSION['userName'];

?>





