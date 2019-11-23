
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
</head>
<body class="h-100">
    <section id = "head">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black!important;overflow:visible;">
            <a class="navbar-brand" href="Home.php">MyLiSt</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 w-lg-50" action="ttt.php" method="GET" id = "searchFor">
                <input class="form-control ml-2 mr-sm-2 rounded " name="searchTag" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-secondary my-2 my-sm-0 bg-dark text-white" type="submit" name="search">Search</button>
            </form>
            <ul class="navbar-nav  mr-4 ">
              <li class="nav-item active m-2 m-lg-4" style="background-color:black">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item m-2 m-lg-4">
                <a class="nav-link" href="wishlist.php">wishlist</a>
              </li>
              <li class="nav-item dropdown m-2 m-lg-4" >
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" style="z-index:777;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign In
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Login</a>
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
            </ul>
    
        </div>
        </nav>
    </section>
    <section id="searchResult">
      <div id="products" class=" ">
      </div>
    </section>


    <script src="./scripts/jquery-3.4.1.js" ></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
       
    $("form").submit(function(){
      var items =   document.getElementById("products");
        var str = $(this).serialize();
        jQuery.ajax({
        type: "GET",
        url: "http://localhost/projects/fillProducts.php",
        data: str
    }).done(function(result){
      
      items.innerHTML=result;
    });

});
$( window ).ready(function() {
  $.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}
$('#searchTag').value = $.urlParam('searchTag');
if(($('#searchTag').value)){
//alert($.urlParam('searchTag'));
$("#searchFor").submit();
$('#searchTag').value = $.urlParam('searchTag');
}
});

</script>
</body>
<?php
 set_time_limit(200);
//$prev="";
if(isset($_REQUEST['searchTag']) ){//&& $prev!=trim($_REQUEST['searchTag'])){
  $contents = trim($_REQUEST['searchTag']);
  //$prev=$contents;
  fillprod($contents);
}
  // $out= passthru('python3 /home/kishora/Downloads/Scrape.py-master/scrape2.py '.$contents);
  // echo("done");
function fillprod($contents){
  include 'connectDb.php';
  $conn=openConn();
echo("entered");
  $sql="select * from products where type='".$contents."'";
        $result = mysqli_query($conn,$sql);
       $r= mysqli_num_rows($result);
        // if(mysqli_num_rows($result)>0){
        //     $k=0;
        //     while($res[$k++] = mysqli_fetch_assoc($result)) {}
        // }
  if($r<8) {echo("true");
    set_time_limit(200);
    $out= passthru('python3 /home/kishora/Downloads/Scrape.py-master/scrape2.py '.$contents);
  }
    $cone=openConn();
    $sql="select * from products where type='".$contents."'";
    $result = mysqli_query($cone,$sql);
   $r= mysqli_num_rows($result);
    if(mysqli_num_rows($result)>0){
        $k=0;
        while($res[$k++] = mysqli_fetch_assoc($result)) {}
     }
    
        echo(" <div class=\"container\">");
        $k=0;
     for($i=0;$i<$r/4;$i++){
      echo("<div class=\"row\">");
      for($j=0;$j<4,$k<$r;$j++,$k++){
        $aa=explode("",$res[$k]['price']);$aa[0]='&#8377;';$aa=implode($aa);
        echo("<div class=\"col-12 col-sm-3 col-md-3 col-lg-3\">"
        ."<div class=\"card\">"
         ." <img class=\"card-img-top img-fluid\" style=\"height:300px;max-width:100%;\" src=\"".$res[$k]['image']."\" alt=\"".$res[$k]['name']."\">" 
          ."<div class=\"card-body\">"
              ."<h4 class=\"card-title\">".$res[$k]['name']."</h4>"
              ."<h6 class=\"card-subtitle mb-2 text-muted\">".$res[$k]['description']."</h6>"
              ." <div class=\"\">" 
                ." <a href=\"".$res[$k]['source']."\" style=\"display:block;\" class=\"btn btn-danger  mt-3\"> Go to Site</a>"             
              ."</div>"
              ."<div class=\"buy d-flex justify-content-between align-items-center\">"
                ."<div class=\"price text-success\"><h5 class=\"mt-4\">".$aa."".$res[$k]['price']."</h5></div>"
                  ." <a href=\"#\" class=\"btn btn-danger mt-3\"><i class=\"fas fa-shopping-cart\"></i> Add to WishList</a>"
              ."</div>"
          ."</div>"
          ."</div>"   
        ."</div>");

      }
      echo("</div>");
     }      
echo("</div>");
}
?>
</html> 
