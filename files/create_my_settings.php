<?php 

$fh = fopen("my_settings.txt", 'w') or die("Failed to create file"); 

$text = <<<_END

localhost;root;pwd1234;my_database 

_END; 

fwrite($fh, $text) or die("Could not write to file"); 

fclose($fh); 

echo "File 'my_settings.txt' written successfully"; ?>