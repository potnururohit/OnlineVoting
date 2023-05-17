<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-registration page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<style>
    body{
        background-image: url("http://cdn.wallpapersafari.com/94/3/Y7V4l0.jpg");
    }
</style>

<body class="bg">
    <h1 class="text-center text-nfo p-3">Voting System</h1>
    <div class="bg py-4 text-center">
        <h2 class="text-center">Register Account </h2>
        <div class="container">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="email" class="form-control w-50 m-auto" placeholder="enter your email" required="required" name="username">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"name="mobile" placeholder="enter your mobile number" required="required" maxLength="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto"name="password" placeholder="enter your password" required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto"name="cpassword" placeholder="confirm password" required="required">
                </div>
                <div class="mb-3">
                    <input type="file" accept=".jpg,.jpeg"class="form-control w-50 m-auto" name="photo" required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
    <p>Already have an account?<a href="../index.php" class="text-white">login-here</a>
</p>

                




            </form>
        </div>
    </div>

</body>
</html>