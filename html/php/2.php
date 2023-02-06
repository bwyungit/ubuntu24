<?php
$a = getcwd();

echo getcwd();
echo '<br>';

chdir ('..');
echo getcwd();
echo '<br>';

chdir ('..');
echo getcwd();
echo '<br>';

chdir ($a);
echo getcwd();
echo '<br>';

?>



