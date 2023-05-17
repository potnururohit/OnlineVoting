<?php
$con=mysqli_connect("localhost:3307","root","");
mysqli_select_db($con,"votersystem");
if(!$con){
    echo "connection not successful";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fontawesome.com/icons/lock?f=classic&s=solid">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">


</head>
<style>
    *{
    padding:0;
    margin:0;
    box-sizing:border-box;
    font-family:poppins;
    text-decoration: none;
}
body{
    margin:5%;
   /* background-color: #f2f4f6;*/
    background-image: url("./admin.jpg");
}
div.login-form{
    width:450px;
    background-color: white;
    box-shadow: 0px 5px 10px black;
}
div.login-form h2{
    text-align: center;
    background-color: #204969;
    padding:12px 0px;
}
div.login-form form{
    padding:30px 60px;

}
div.login-form form div.input-field{
     display:flex;
     flex-direction:row;
     margin:10px 0px;

}
div.login-form form div.input-field i{
    color:darkslategray;
    padding:10px 14px;
    background-color: #f2f4f6;
    margin-right:4px;
}
div.login-form form div.input-field input{
    background-color: #f2f4f6;
    padding:10px;
    border:none;
    width:100%;
    padding-left:15px;
    
}
div.login-form form button{
    width:100%;
    background-color: #5bd1d7;
    padding:8px;
    border:none;
    font-size:16px;
    font-weight:500;
    color:white;
    margin:15px 0px;
    transition: background-color 0.45;
}
div.login-form form button:hover{
    background-color: #41b6e6;
}



</style>
<body class="center mt-30">
    <div class="login-form">
        <h2 class="text-white">ADMIN LOGIN PAGE</h2>
        <form method="POST" action="./index6.php">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" type="email" placeholder="admin name">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="password" required="required">
            </div>
            <button type="submit" name="Signin">Sigin</button>
            <div class="extra">
                <!--<a href="#">Forgot password</a>-->
            </div>
        </form>
    </div>
    <?php
       if(isset($_POST['Signin'])){
        
       }
    ?>
</body>
</html>
