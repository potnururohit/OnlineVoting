<?php
$con=mysqli_connect("localhost:3307","root","");
mysqli_select_db($con,"votersystem");
if(!$con){
    echo "connection not  successful";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
//$id=$_POST['id'];
$username=$_POST['username'];
$user=$_POST['user'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$photo=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];
if(substr($username, -24)!="@student.nitandhra.ac.in"){
    echo '<script>
    alert("email is not valid");
    window.location="../partials/registration2.php";
    </script>
    ';
}
else{


    if($cpassword!=$password) {
        echo '<script>
    alert("password dont match");
    window.location="../partials/registration2.php";
    </script>
    ';
    } else {
        move_uploaded_file($tmp_name, "C:/xampp/htdocs/voting/uploads/$photo");
        $password5 = md5($password);

        $sql="INSERT INTO usedata (username,user,password,mobile,photo,std,status,votes) VALUES ('$username','$user','$password5','$mobile','$photo','$std',0,0)";

        $result=mysqli_query($con, $sql);
        if($result) {
            echo '<script>
        alert("Registartion succesful");
        window.location="../index2.php";
        </script>
        ';


        } else {
            echo "failed";
        }


    }
}
}
?>
