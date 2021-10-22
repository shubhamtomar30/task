<?php

$con = mysqli_connect('localhost' , 'root' , '' , 'test');

if($con){
    echo 'connect';
}
else{
    echo 'notconnect';
}






?>