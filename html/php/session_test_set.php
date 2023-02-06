<?php

 session_save_path("./session/");
 session_start();
 
 echo "session name =".session_name();
 echo "<br>";
 echo "session_id =".session_id();
 echo "<br>";

 echo " \$_SESSION['userId'] = 10000";
 $_SESSION['userId'] = 10000; 
 echo "<br>";
 
 echo " \$_SESSION['userName'] = Dreamaz";
 $_SESSION['userName'] = "Dreamaz";
 echo "<br>";
?> 



