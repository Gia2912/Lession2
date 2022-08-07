<?php 
include 'config.php';

if(isset($_GET["id"])){
  $id = $_GET["id"];

  $sql = "SELECT * FROM user WHERE id = $id";
  $qr = mysqli_query($config,$sql);
  $rows = mysqli_fetch_array($qr);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/css1.css">
</head>
<body>
  <div class="border border-success p-2 mb-2" style="margin: auto 370px; padding-top:50px; border: 20px solid green; height: 700px; ">

  <nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid" >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="margin-left: 80px;  border: 2px solid DodgerBlue; border-radius: 5px; background-color:  DodgerBlue; color:  white; text-align: center; width: 80px;">Home</a>
        </li>

       <li class="nav-item-dropdown">
          <a class="nav-link active" aria-current="page" href="logout.php" style="margin-left: 40px">Log out</a>

          </li> 
      </ul>
     </div>
     <a href="home.php">
      <img src="./img/lampart-logo.jpg" height= 70 width=70  style="margin-right: 110px">
  </a>
  </div>
</nav>

            <form action="" method="POST" >
                <div class="form-group" style="margin-left:180px; margin-top:50px">
                    <h5><strong>Full Name:</strong></h5>
                    <input type="text" style="width: 400px; text-align: center;" class="form-control" name="username" value="<?php echo $rows['username'];?>" >
                </div>
                <div class="form-group" style="margin-left:180px; margin-top:20px">
                </br>
                    <h5><strong>Email:</strong></h5>
                    <input class="form-control" style="width: 400px; text-align: center;" name="email"value="<?php echo $rows['email'];?>" >
                </div>
                 <div class="form-group" style="margin-left:180px; margin-top:20px">
                </br>
                    <h5><strong>Password:</strong></h5>
                    <input class="form-control" style="width: 400px; text-align: center;" name="password"value="<?php echo $rows['password'];?>" >
                </div>

                 <div class="stuff" style="margin-left: 350px; margin-top:30px;">

          <a href="home.php"><button type="button" class="btn btn-outline-success">Return</button></a>
             
            </div>


</div>
</body>
</html>