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
   /* body{
        background-image: url("http://cdn.wallpapersafari.com/94/3/Y7V4l0.jpg");
    }*/
    .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: 20px auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 30px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 16px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852;
  background: rgb(141,194,111);
  background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}


</style>

<body>
    <h1 class="text-center p-3">Voting System</h1>

    <div class="login-page">


    <div class="form">
    <h2 class="text-center">Register Account </h2>

            <form class="login-form" action="../actions/register.php" method="POST" enctype="multipart/form-data">
                    <input type="email" id="email"  autocomplete="off" placeholder="enter your email" required="required" name="username">
                    <input type="name" autocomplete="off" placeholder="enter your name" required="required" name="user">
                    <input type="text" autocomplete="off" name="mobile" placeholder="enter your mobile number" required="required" maxLength="10" minLength="10">
                    <input type="password" autocomplete="off" name="password" placeholder="enter your password" required="required">
                    <input type="password" autocomplete="off" name="cpassword" placeholder="confirm password" required="required">
                    <input type="file" autocomplete="off" accept=".jpg,.jpeg" name="photo" required="required">
                    <select name="std" required="required" >
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                <button type="submit" onclick="validateEmail()" class="btn btn-dark my-4">Register</button>
                <script>
              /*   function validateEmail(event) {
  event.preventDefault(); // prevent form submission by default
  var email = document.getElementById("email").value;
  
  // Create an array of approved email domains or addresses
  var approvedEmails = ["user@student.nitandhra.ac.in"];
  
  // Check if the email address matches one of the approved domains or addresses
  var isApproved = approvedEmails.some(function(approvedEmail) {
    return email.endsWith("@" + approvedEmail);
  });
  
  if (!isApproved) {
    alert("Only certain email addresses are allowed to register.");
  }
}*/
function validateEmail(event){
var email = document.getElementById("email").value;
if (!email.endsWith("@student.nitandhra.ac.in")) {
  alert("Only certain email addresses are allowed to register.");
  event.preventDefault();
  return false; // prevent form submission

}

}
</script>

    <p class="message">Already have an account?<a href="../index2.php" >login-here</a></p>
</p>

                



</div>
</div>

            </form>
    </div>

</body>
</html>