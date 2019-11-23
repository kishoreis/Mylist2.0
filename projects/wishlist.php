<?php session_start();
echo(session_id());?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./scripts/jquery-3.4.1.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../mainstyle.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body class="h-100">
<section style="z-index:901;">
    <div class="container" >
    <div id="myModal" class="modal fade justify-content-center h-100 " tabindex="-1">
        <div class="modal-dialog" style="top:80px;height:100%">
            <div class="modal-content w-75" style="margin-left:12%;">
                <div class="modal-header"  style="align-self:center;display:block;">
              <div >  <span class="input-group-text" style="border-radius:40px;"><i class="fa fa-user fa-5x" ></i></span></div>
                    <h5 class="modal-title" >&nbsp;&nbsp;&nbsp;Login</h5>
                </div>
                <div class="modal-body"><form action="login.php" method="GET">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group form-group"  style="align-self:center;">
                                <div class="input-group-prepend">
							        <span class="input-group-text"><i class="fa fa-user"></i></span>
						        </div>
                                <input type="email" class="form-control  p-3 rounded" placeholder="Email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group  form-group"  style="align-self:center;">
                                <div class="input-group-prepend">
							        <span class="input-group-text"><i class="fa fa-lock"></i></span>
						        </div>
                                <input type="password" class="form-control  rounded" TextMode="Password" name="psword"placeholder="password">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-8">
                            <div style="align-self:right;">
                                <input type="checkbox" class="form-check-input ml-sm-4 ml-2" id="exampleCheck1">
                                <label style="opacity:.75;" class="form-check-label ml-sm-5 ml-4" for="exampleCheck1">save password</label>
                                   
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group" style="align-self:right;">
                                <input type="submit" class="btn btn-primary w-100"  name="login">    
                            </div>
                        </div>
                    </div></form>
                  </div>
                <div class="modal-footer">
                    <div style="align-self:center;width:73%">
                        <a class="btn-link" href="signIn.php">Create new Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    <section id = "head" style="z-index:501;">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black!important;overflow:visible;">
            <a class="navbar-brand" href="Home.php">MyLiSt</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 w-lg-50" action="products.php" method="GET">
                <input class="form-control ml-2 mr-sm-2 rounded " name="searchTag" type="search" placeholder="Search" aria-label="Search" >
                <input class="btn btn-outline-secondary my-2 my-sm-0 bg-dark text-white" type="submit" value="Search">
            </form>
            <ul class="navbar-nav  mr-4 ">
              <li class="nav-item  m-2 m-lg-4" >
                <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active m-2 m-lg-4"  style="background-color:black">
                <a class="nav-link" href="#">Wishlist&nbsp;<i class="fa fa-cart-plus"></i></a>
              </li>
              <li class="nav-item dropdown m-2 m-lg-4" >
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign In
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown">
                  <a class="dropdown-item" id="login" href="#">Login</a>
                  <a class="dropdown-item" href="signIn.php">Create Account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item m-2 m-lg-4"> 
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item m-2 m-lg-4">
                <a class="nav-link" href="help.php">Help</a>
              </li>
              <li class="nav-item active dropdown m-2 m-lg-4" style="background-color:black">
                
                  <?php 
                    if(isset($_SESSION["name"]))
                  echo "<a class=\"nav-link dropdown-toggle text-uppercase\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">".$_SESSION['name'].
                  "</a>";
                  echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\" id=\"dropdown\">".
                  "<a class=\"dropdown-item\" id=\"logout\" onclick='logout()' href=\"#\">Logout</a></div>"
                ?>
              </li>
            </ul>
    
        </div>
        </nav>
    


     <script src="./scripts/jquery-3.4.1.js" ></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
<script>
if (window.matchMedia('(max-width: 768px)').matches){
    $('#login').on('click', function(){
        window.location.href="login.php";
	});}
  else {
    $('#login').click(function(){
      $("#myModal").modal('show');
 
});
  }
  
function logout(){
    <?php session_unset();session_destroy();?>
    window.location.href="Home.php";
}
</script>
<?php
    
    if(isset($_REQUEST['login'])){
        print_r($_REQUEST);
        include 'connectDb.php';
        $conn=openConn();
        echo 'success';
        $sql="select * from user where email='".$_REQUEST['email']."' and password='".$_REQUEST['psword']."'";
        $result = mysqli_query($conn,$sql);
        //echo(mysqli_num_rows($result));
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)) {$_SESSION['name_']=$row['name'];$_SESSION['email_']=$row['email'];}
            echo("<script>document.location.href=\"Home.php\";\")</script>");
        }
        else{
            echo("<script>alert(\"wrong email or password\")</script>");
        }
    }
?>
</body>
</html>