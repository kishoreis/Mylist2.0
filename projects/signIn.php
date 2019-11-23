<?php session_start();?>

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
<body  style="background-color:#d6dadf !important">
    
    <section class="h-100">
      <div style="align-content:center">
        <div class="container w-sm-100 w-50 h-100 bg-dark rounded p-3" style="margin-top:5%;" >
            <div class="row">
                <div style="width:43%"></div>
                <div class=" " style="align-self:center;display:block;" >
                    <div >  <span class="input-group-text " style="border-radius:40px;"><i class="fa fa-user fa-5x" ></i></span></div>
                    <h5 class="modal-title" >&nbsp;&nbsp;&nbsp;Login</h5>
                </div>
                
            </div>
            <form action="" method="GET" >
              <div  style="align-content:center;">
              <div class="form-group input-group m-5">
                    <div class="input-group-prepend w-75">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
			            <input type="text" class="form-control" name="name"  placeholder="Enter name">
                    </div>    
                </div>
                <div class="form-group input-group m-5">
                    <div class="input-group-prepend w-75">
						<span class="input-group-text"><i class="fa fa-envelope"></i></span>
			            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>    
                </div>
                <div class="form-group input-group m-5">
                    <div class="input-group-prepend w-75">
						<span class="input-group-text"><i class="fa fa-mobile fa-1x"></i></span>  
                        <input type="tel"  class="form-control" id="phone" name="phone" placeholder="Enter phone">
                    </div>
                </div>
                <div class="form-group input-group m-5">
                    <div class="input-group-prepend w-75">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="psword"  placeholder="Enter password">
			        </div>
                    
                </div>
                <div class="form-group input-group m-5">
                    <div class="input-group-prepend w-75">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control"  name="pswordCnf"   placeholder="Confirm password">
			        </div>
                    
                </div>
              </div>
                <button type="submit" name="submit" class="btn btn-primary ml-sm-5 ml-5">Submit</button>
            </form>
        </div>
      </div>
    </section>
    <script src="./scripts/jquery-3.4.1.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
    
    if(isset($_REQUEST['submit'])){
        print_r($_REQUEST);
        include 'connectDb.php';
        $conn=openConn();
        echo 'success';
        $sql="select * from user where email='".$_REQUEST['email']."'";
        $result = mysqli_query($sql,$conn);
        if(mysqli_num_row>0){
            echo("<script>alert(\"the mail id is already registered\")</script>");
        }
        else{
            $sql="insert into user values('".$_REQUEST['email']."','".$_REQUEST['phone']."','".$_REQUEST['psword']."','".$_REQUEST['name']."')";
            $res=mysqli_query($conn,$sql);
            echo $res;
            if( $res){
                
                $_SESSION['name']=$_REQUEST['name'];
               echo("<script>alert(\"your account has been created\");".
                "document.location.href=\"Home.php\";</script>");
            }
            else{
                echo("<script>alert(\"connection error :) try again".mysqli_error($conn)."\")</script>");
            }
        }
    }
?>
</body>

</html>