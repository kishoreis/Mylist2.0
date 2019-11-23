<?php
     session_start();
    if(isset($_REQUEST['login'])){
        print_r($_REQUEST);
        include 'connectDb.php';
        $conn=openConn();
        echo 'success';
        $sql="select * from user where email='".$_REQUEST['email']."' and password='".$_REQUEST['psword']."'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            
            while($row = mysqli_fetch_assoc($result)) {$_SESSION['name_']=$row['name'];$_SESSION['email_']=$row['email'];}
            echo("<script>document.location.href=\"Home.php\";</script>");
        }
        else{
            echo("<script>alert(\"wrong email or password\")</script>");
        }
    }
?>

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
<body class="bg-white">
    
<div class="container">
    <div id="myModal" class="modal fade justify-content-center h-100 " tabindex="-1">
        <div class="modal-dialog" style="top:50px;height:100%">
            <div class="modal-content w-75" style="margin-left:12%;">
                <div class="modal-header"  style="align-self:center;display:block;">
              <div >  <span class="input-group-text" style="border-radius:40px;"><i class="fa fa-user fa-5x" ></i></span></div>
                    <h5 class="modal-title" >&nbsp;&nbsp;&nbsp;Login</h5>
                </div>
                <div class="modal-body">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group form-group"  style="align-self:center;">
                                <div class="input-group-prepend">
							        <span class="input-group-text"><i class="fa fa-user"></i></span>
						        </div>
                                <input type="email" class="form-control p-3 rounded" placeholder="Email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group  form-group"  style="align-self:center;">
                                <div class="input-group-prepend">
							        <span class="input-group-text"><i class="fa fa-lock"></i></span>
						        </div>
                                <input type="password" class="form-control rounded" TextMode="Password" name="psword" placeholder="password">
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
                                <input type="submit" class="btn btn-primary w-100" name="login">    
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div style="align-self:center;width:73%">
                        <a class="btn-link" href="">Create new Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<style>
    .bs-example{
    	margin: 20px;
    }
</style>
    <script src="./scripts/jquery-3.4.1.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
