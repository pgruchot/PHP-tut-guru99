<?php
if (!unlink('my_settings_backup.txt'))
{
     echo "Could not delete file";
 }
else
{
     echo "File 'my_settings_backup.txt' successfully deleted"; 
}
 ?>