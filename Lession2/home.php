<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/css1.css">
<?php
  include 'config.php';
  session_start();
    $user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
?>


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
  
 
<?php
//                Neu chua dang nhap

if(!isset($_SESSION["email"])){
$check = "SELECT * FROM user";
$sql = mysqli_query($config,$check);
$row = mysqli_fetch_assoc($sql);
       if(isset($_GET['trang'])){
      $page = $_GET['trang'];
    }else {
      $page = '';
    } 

    $pages = mysqli_num_rows($sql);
    $pages_count = ceil($pages/3);
      if($page == '' || $page == 1){
      $begin = 1;
    }else {
      $begin = ($page *3)-3;
    }
  
?>
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

<?php
include 'nonuser.php';
?>
</table>
  <div class="btn-group" role="group" aria-label="Basic outlined example" style="margin-left: 250px">
<?php
     if($page > 1){
      $a = $page - 1;
  ?>
  <a href="home.php? trang= <?php echo $a; ?>><button type="submit" class="btn btn-outline-primary">Previous</button>
<?php } ?>

  <?php
    for($i=1; $i <= $pages_count; $i++){
  ?>
 <a href="home.php? trang= <?php echo $i; ?>> <button type="submit" class="btn btn-outline-primary" >
    <?php echo $i ?> </button> </a>
  <?php } ?>

 <?php
   if($i>$page){
    $b = $page + 1;
  ?>
   <a href="home.php? trang= <?php echo $b; ?>> <button type="submit" class="btn btn-outline-primary" >
    Next </button> </a>
    <?php } ?>


<?php
}
if(isset($_SESSION["email"])){

//                         Neu da dang nhap

if($user["level"] == 1){

//                  Neu User dang nhap la Admin

     $check = "SELECT * FROM user";
     $sql = mysqli_query($config, $check);
    if(isset($_GET['trang'])){
      $page = $_GET['trang'];
    }else {
      $page = '';
    }
 

    $pages = mysqli_num_rows($sql);
    $pages_count = ceil($pages/3);

      if($page == '' || $page == 1){
      $begin = 0;
    }else {
      $begin = ($page *3)-3;
    }

?>

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

  <?php
 
    include 'admin.php'; 
  ?>

</table>

  <div class="btn-group" role="group" aria-label="Basic outlined example" style="margin-left: 250px">
 <?php
    if($page > 1){
      $b = $page - 1;
  ?>
  <a href="home.php? trang= <?php echo $a; ?>><button type="submit" class="btn btn-outline-primary">Previous</button>
<?php } ?>

  <?php
    for($i=1; $i <= $pages_count; $i++){
  ?>
 <a href="home.php? trang= <?php echo $i; ?>> <button type="submit" class="btn btn-outline-primary" >
    <?php echo $i ?> </button> </a>
  <?php } ?>

 <?php
   if($i>$page){
    $b = $page + 1;
  ?>
   <a href="home.php? trang= <?php echo $b; ?>> <button type="submit" class="btn btn-outline-primary" >
    Next </button> </a>
    <?php } ?>
<?php
}
}


//                  Neu user dang nhap la User
if ($user["level"] != 1){
  ?>
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
<?php
include 'user.php';
}

?>
  </div>
</body>
</html>