<?php
$connection = mysqli_connect('localhost', 'root', 'user', 'registration');
if (mysqli_connect_errno()) {
    echo "connection failed :" . mysqli_connect_error();
}
