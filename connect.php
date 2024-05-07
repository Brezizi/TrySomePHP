<?php
$conn=mysqli_connect('localhost','root','','db-intercom');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Not connected with database: %s\n", mysqli_connect_error());
    exit();
}
?>