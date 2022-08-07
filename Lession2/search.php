<?php
include 'config.php';

if(isset($_POST["search"])){
  $search = $_POST["search"];
}else{
  $search = '';
}


$sql_search = "SELECT * FROM user WHERE email LIKE '%".$search."%'  ";
$query_search = mysqli_query($config,$sql_search);

$num_search = mysqli_num_rows($query_search );


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
 
<?php
//    Giao dien home khi nguoi dung da dang nhap hoac chua dang nhap

  if(!isset($_SESSION["email"])){ ?>
       <li class="nav-item-dropdown">
          <a class="nav-link active" aria-current="page" href="login.php" style="margin-left: 40px">Login</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Register.php">Register</a></li>
          </ul>
          </li> 
      </ul>
     </div>
     <a href="home.php">
      <img src="./img/lampart-logo.jpg" height= 70 width=70  style="margin-right: 110px">
  </a>
  </div>
</nav>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <form class="d-flex" role="search" action="search.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 600px; text-align: center;" name="search">
      <button class="btn btn-outline-success" type="submit" name="submit_search">Search</button>
    </form>
  </div>
</nav>


<?php
//        Neu user chua dang nhap thi se co nut Login, Register thay vi Logout
//        Neu user da dang nhap se co nut Log out ke ben nut Home
  }else{
?>
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
<nav class="navbar bg-light">
  <div class="container-fluid">
    <form class="d-flex" role="search" action="search.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 600px; text-align: center;" name="search">
      <button class="btn btn-outline-success" type="submit" name="submit_search">Search</button>
    </form>
  </div>
</nav>
<?php } ?>
  
<p>Search found <?php echo $num_search; ?> results</p>

<table class="table table-bordered" style="margin-top: 50px; height:50px;">
   <thead>
    <tr style="text-align: center;">
      <th scope="col">#</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

    <tbody style="border-height: 70px; text-align: center;">
<tr>
         <?php
         while($rows = mysqli_fetch_assoc($query_search)) {
         if($rows['level'] != 1){
        
        echo " <td>1</td>";
        echo " <td>".$rows['username']."</td>";
        echo " <td>".$rows["email"]."</td>";
        echo " <td> User </td>";
        ?>
        <td>
       <a href="sua.php?id=<?php echo $user['id'];?>"><img src="./img/write.png" style="width: 20px; height: 20px;"> </a>
       <a href="xoa.php?id=<?php echo $user['id'];?>"><img src="./img/minus.png" style="width: 20px; height: 20px;"> </a>
        <a href=""><img src="./img/document.png" style="width: 20px; height: 20px;"></a>
        <a href="view.php?id=<?php echo $user['id'];?>"><img src="./img/view.png" style="width: 20px; height: 20px;"></a>
    <td>  
    </tr>
        </tbody>
<?php
}
}
?>

</div>
</body>
</html>