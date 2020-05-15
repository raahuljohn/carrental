<?php

$conn = mysqli_connect('localhost','root','','one');

if(!$conn)
{
    echo 'Error in COnnection'.mysqli_connect_error($conn);
}

?>