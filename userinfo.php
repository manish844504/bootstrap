<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}
else
{
    echo "No connection";
}

mysqli_select_db($con, 'bootstrap');




?>