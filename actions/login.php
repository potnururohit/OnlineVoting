<?php
session_start();
  $con=mysqli_connect("localhost:3307","root","");
  mysqli_select_db($con,"votersystem");
  if(!$con){
      echo "connection not successful";
  }
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
  //  $user=$_POST['user'];
  //  $mobile=$_POST['mobile'];
    $password=md5($_POST['password']);//changing the password to hash code
    //$std=$_POST['std'];


    //$sql="SELECT * FROM usedata WHERE username = '$username' AND password = '$password' AND mobile = '$mobile' ";
        $sql="SELECT * FROM usedata WHERE username = '$username' AND password = '$password'";

    $result=mysqli_query($con,$sql);
    if($result ){
    $num=mysqli_num_rows($result);

    if($num>0){
            $sql="SELECT * FROM usedata WHERE std = 'group' ";
            $resultgroup=mysqli_query($con,$sql);
            if(mysqli_num_rows($resultgroup)>0){
                $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
                $_SESSION['groups']=$groups;
            }
            $data=mysqli_fetch_array($result);
            $_SESSION['username']=$data['username'];
            $_SESSION['status']=$data['status'];
            $_SESSION['user']=$data['user'];
            $_SESSION['data']=$data;
              echo '<script>
              window.location="../partials/dashboard.php";
              </script>
              '    ;
    }else{
        echo '<script>
        alert("invalid credentials");
        window.location="../index2.php";
        </script>
        ';

    }
}
else{
    echo "false";
}



}
?>  