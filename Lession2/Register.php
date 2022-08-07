<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/css1.css">


</head>

<body>
  <div class="border border-success p-2 mb-2" style="margin: auto 400px; padding-top:50px; border: 20px solid green; height: 700px; ">


  <nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid" >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="margin-left: 80px; ">Home</a>
        </li>
            <li class="nav-item-dropdown">
          <a class="nav-link active" aria-current="page" style="margin-left: 40px; border: 2px solid DodgerBlue; border-radius: 5px; background-color:  DodgerBlue; color:  white; text-align: center; width: 80px;">Register</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
          </li> 
      </ul>
     </div>
     <a href="home.php">
      <img src="./img/lampart-logo.jpg" height= 70 width=70  style="margin-right: 110px">
  </a>
  </div>
</nav>

  <div class="black-border">
    
<form action="dki.php" method="POST">
      <p style="margin-top: 20px; margin-left: 30px;"> Full name </p>
      <input type="text" name="name"  style="width: 350px; margin-left: 30px">

      <p style="margin-top: 20px; margin-left: 30px;"> Email address </p>
      <input type="text" name="email"  style="width: 350px; margin-left: 30px">
      <p class="ww"> We'll never share your email with anyone else </p>

      <p style="margin-top: 20px; margin-left: 30px;"> Password</p>
      <input type="password" name="password" style="width: 350px; margin-left: 30px">

       <p style="margin-top: 20px; margin-left: 30px;"> Confirm password</p>
      <input type="password" name="repassword" style="width: 350px; margin-left: 30px">

    <button type="submit" class="btn btn-primary" name="submit" style=" margin-left: 30px; margin-top: 30px">Register</button>
  
</form>
  </div>
  </div>
</body>
</html>