<?php
session_start() ;
$con=mysqli_connect("localhost:3307","root","");
mysqli_select_db($con,"votersystem");
if(!$con){
    echo "connection not successful";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $votes=$_POST['groupvotes'];
    $totalvotes=$votes+1;
    $gname=$_POST['groupname'];
    $uname=$_SESSION['data']['username'];
    $updatevotes=mysqli_query($con,"update usedata set votes='$totalvotes' where username='$gname'");
    $updatestatus=mysqli_query($con,"UPDATE usedata SET  status=1 where username='$uname'");
 if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($con,"SELECT username,user,photo,votes FROM usedata WHERE std='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['data']['status']=1;
    echo '<script>
    alert("voted successfull");
    window.location="../partials/dashboard.php";
    </script>';
 


 }else{
    echo '<script>
    alert("technical error");
    window.location="../partials/dashboard.php";
    </script>';
 }
}


?>