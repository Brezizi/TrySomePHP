<?php
$conn=mysqli_connect('localhost','root','','db-intercom');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Not Connected: %s\n", mysqli_connect_error());
    exit();
}
?>
