<?php
   session_start();
   if(!isset($_SESSION['username'])){
    header('location:../');
   }
   $data=$_SESSION['data'];
   if($_SESSION['data']['status']==1){
      $status='<b class="text-success">Voted</b>';
   }
   else{
    $status='<b class="text-danger">Not Voted</b>';

   }

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

      <link rel="stylesheet" href="../style.css">
</head>
<style>
    .hi{
        height:100px;
        width:100px;
    }
    .he{
        height:100px;
        width:100px;

    }
    body{
      /*  background-image:url("C:\Users\Govind\Downloads\12_asadas12221.jpg");*/
     background-image: url("https://24slides.com/presentbetter/content/images/wordpress/2019/12/null-58.png");
     
       /*background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzwG-HAaGOW9QvD7SNgHTTbcD8-5oi7UhNsg&usqp=CAU");*/
    }
</style>
<body class="bg-info text-light">

<div class="container my-5">
    <a href="../index2.php"><button class="btn btn-dark text-light px-3 mx-3">Back</button></a>
    <a href="logout.php"><button class="btn btn-dark text-light px-3 mx-3">logout</button></a>
<h1 class="my-3">Online Voting System</h1>
<h1 class="text-dark">Groups</h1>

<div class="row my-5">
    <div class="col-md-7">
        <?php
        if(isset($_SESSION['groups'])){
            $groups=$_SESSION['groups'];

            for($i=0;$i<count($groups);$i++){
                ?>
                <div class="row">
                <div class="col-md-4">
                         <img class="he"src="../uploads/<?php echo $groups[$i]['photo']?>" alt="GroupImage">
                </div>
                <div class="col-md-8">

                   <strong class="text-dark">Group Email:</strong>
                   <?php echo $groups[$i]['username'] ?><br>

                   <strong class="text-dark">Votes:</strong>
                   <?php echo $groups[$i]['votes']?><br>
        
                   </div>
             </div>
             <form action="../actions/voting.php" method="post">
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']?>"><br>
                <input type="hidden" name="groupname" value="<?php echo $groups[$i]['username']?>"><br>

            <?php
            if($_SESSION['data']['status']==1){
                ?>
                <button disabled class="bg-success my-2 mx-4 text-white px-4">Voted</button>
                <?php
            }else{
                ?>
                <button class="bg-danger my-2 mx-4 text-white px-4" type="submit">vote</button>
                <?php
            }
             ?>



             </form><br>
             <hr>
       <?php 
            }

        }else{
            ?>
            <div class="container">
                <p>No groups to display</p>
            </div>
            <?php
        }
         ?>
     <!-- groups -->
   <!--  <div class="row">
        <div class="col-md-4">
                 <img  src="" alt="GroupImage">
        </div>
        <div class="col-md-8">
        <strong class="text-dark">Group name</strong><br>
           <strong class="text-dark">Email</strong><br>
           <strong class="text-dark">Votes</strong><br>

           </div>
     </div>-->
     
    </div>
    <div class="col-md-5
    ">
        <!-- user profile-->
        <img class="hi"src="../uploads/<?php echo $data['photo']?>" alt="Userimage">
        <br>
        <br>
        <strong class="text-dark h5">Name:</strong>
        <?php echo $data['user'] ?><br><br>

        <strong class="text-dark h5">Email:</strong>
        <?php echo $data['username'];?><br><br>


        <strong class="text-dark h5">Mobile:</strong>
        <?php echo $data['mobile'];?><br><br>

        
        <strong class="text-dark h5">Status:</strong>
        <?php echo $status ?><br><br>



        


        </div>
    
</div>

</div>
</body>
</html>