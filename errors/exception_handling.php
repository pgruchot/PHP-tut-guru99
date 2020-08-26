<?php
try {
    $var_msg = "This is an exception example";
    throw new Exception($var_msg);
}
catch (Exception $e) {
    echo "Message: " . $e->getMessage();
    echo "";
    echo "getCode(): " . $e->getCode();
    echo "";
    echo "__toString(): " . $e->__toString();
}
?>