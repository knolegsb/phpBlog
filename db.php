<?php
    $db = mysqli_connect("localhost","root","","blogsean");
    if(mysqli_connect_error()){
        echo"failed to connect".mysqli_connect_error();
    }
?>