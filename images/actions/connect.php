<?php
$con=mysqli_connect("localhost:3307","root","");
mysqli_select_db($con,"votersystem");
if(!$con){
    echo "connection not successful";
}
?>