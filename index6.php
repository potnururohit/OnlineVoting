<?php
session_start();
  $con=mysqli_connect("localhost:3307","root","");
  mysqli_select_db($con,"learning");
  if(!$con){
      echo "connection not successful";
  }
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['ADMIN_NAME'];
    $password=$_POST['ADMIN_PASSWORD'];
    $sql="SELECT * FROM admin_login WHERE ADMIN_NAME = '$username' AND ADMIN_PASSWORD = '$password'";
    if($sql){
        echo '<script>
        window.location="./detailsofstudents.php";
        </script>
        '    ;

    }
    else{
        echo '<script>
        alert("invalid credentials");
        </script>
        ';


    }

}
    ?>
