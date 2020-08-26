<?php

$user_input = "<script>alert('Your site sucks!');</script>";

echo strip_tags($user_input);

?>