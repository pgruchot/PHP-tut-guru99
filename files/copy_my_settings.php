<?php
copy('my_settings.txt', 'my_settings_backup.txt') or die("Could not copy file");
echo "File successfully copied to 'my_settings_backup.txt'"; 
?>