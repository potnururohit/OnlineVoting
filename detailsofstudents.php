<?php
$con=mysqli_connect("localhost:3307","root","");
mysqli_select_db($con,"votersystem");
if(!$con){
    echo "connection not successful";
}
$sql="select * from usedata";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body class="bg-dark">
    <div class="container">
    <h2 class="display-6 text-center text-light">ADMIN PAGE</h2>

    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="bg-dark text-white">
                                <td>Username</td>
                                <td>User</td>
                                <td>Password</td>
                                <td>mobile</td>
                                <td>Photo</td>
                                <td>Standard</td>
                                <td>Status</td>
                                <td>Votes</td>
                            </tr>
                            <tr>
                                <?php
                                   while($row=mysqli_fetch_assoc($result)){

                            ?>
                                   <td><?php echo $row['username']?></td>
                                   <td><?php echo $row['user']?></td>
                                   <td><?php echo $row['password']?></td>
                                   <td><?php echo $row['mobile']?></td>
                                   <td><?php echo $row['photo']?></td>
                                   <td><?php echo $row['std']?></td>
                                   <td><?php echo $row['status']?></td>
                                   <td><?php echo $row['votes']?></td>





                                    </tr>
                            <?php
                                   }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>