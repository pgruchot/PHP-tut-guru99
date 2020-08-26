<?php
$my_url = "www.guru99.com";
if (preg_match("/guru/", $my_url))
{
	echo "the url $my_url contains guru";
}
else
{
	echo "the url $my_url does not contain guru";
}
?>