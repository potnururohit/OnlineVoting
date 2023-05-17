<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php voting system</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<style>
   /*body{
        background-image: url("http://cdn.wallpapersafari.com/94/3/Y7V4l0.jpg");
    }*/
</style>
<body class="bg">
    <h1 class="text-dark text-center p-3" >Online Voting System</h1>
    <div class="bg py-4">
        <h2 class="text-center"></h2>
        <div class="container text-center ">
            <form action="./actions/login.php" method="POST" >
                <br>
                <br>
                <div class="mb-3">
                    <input type="email" class="form-control w-50 m-auto"name="username" placeholder="enter your username" required="required" autocomplete="off">
                </div>
              <!--  <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"name="mobile" placeholder="enter your mobile number" required="required" autocomplete="off" maxLength="10" minLength="10">
                </div>-->
                <br>
                
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto "name="password" placeholder="enter your password" autocomplete="off" required="required">
                </div>
                <br>
                <br>
              <!--  <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>-->
                <button type="submit" class="btn btn-dark my-4">Login</button>
    <p>Dont have an account?<a href="./partials/registration.php" class="text-white">Register here</a>
</p>

                </form>

        </div>
    </div>

</body>
</html>