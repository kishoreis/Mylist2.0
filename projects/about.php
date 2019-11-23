<!DOCTYPE HTML>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
 <body>
 <section id = "head" style="z-index:501;">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black!important;overflow:visible;">
            <a class="navbar-brand" href="#">MyLiSt</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 w-lg-50" action="products.php" method="GET">
                <input class="form-control ml-2 mr-sm-2 rounded " name="searchTag" type="search" placeholder="Search" aria-label="Search" >
                <input class="btn btn-outline-secondary my-2 my-sm-0 bg-dark text-white" type="submit" value="Search">
            </form>
            <ul class="navbar-nav  mr-4 ">
              <li class="nav-item active m-2 m-lg-4" style="background-color:black">
                <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item m-2 m-lg-4" >
                <a class="nav-link" href="wishlist.php">Wishlist&nbsp;<i class="fa fa-cart-plus"></i></a>
              </li>
              <li class="nav-item dropdown m-2 m-lg-4" >
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign In</a>
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
    </section>
 <section id="faq">

<div class="container gap100" >
    <div class="accordion text-dark" >
        <div class="card" id="nn">
            <div class="card-header" id="hd1">
                <h2 class="mb-2" >
                    <button class="btn btn-link" type="button">
                        TOP FAQ'S:
                    </button>
                </h2>
            </div>

        </div>
        <div class="card" id="nn">
            <div class="card-header" id="hd1">
                <h2 class="mb-2" >
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#coll1">
                        Isuue with the payment?
                    </button>
                </h2>
            </div>
            <div id="coll1" class="collapse">
                <div class="card-body">
                    Alzheimer’s Disease (AD), is a neurodegenerative disease. It is the most common cause of dementia. AD affects the patients cognitive and behav- ioral skills. The current clinical tests are inaccurate, making it hard to detect and diagnose the problem correctly. In this project we will use machine learning techniques in order to find a better way to detect and diagnose Alzheimer’s Disease. We will use MRI data obtained from the OASIS database with different machine learning algorithms, to find out an accurate means of diagnosing Alzheimer’s Disease
                </div>
            </div>
        </div>
        <div class="card" id="nn">
            <div class="card-header" id="hd1">
                <h2 class="mb-2" >
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#coll2">
                        Order is not confirmed yet ?
                    </button>
                </h2>
            </div>
            <div id="coll2" class="collapse">
                <div class="card-body">
                    Alzheimer’s Disease (AD), is a neurodegenerative disease. It is the most common cause of dementia. AD affects the patients cognitive and behav- ioral skills. The current clinical tests are inaccurate, making it hard to detect and diagnose the problem correctly. In this project we will use machine learning techniques in order to find a better way to detect and diagnose Alzheimer’s Disease. We will use MRI data obtained from the OASIS database with different machine learning algorithms, to find out an accurate means of diagnosing Alzheimer’s Disease
                </div>
            </div>
        </div>
        <div class="card" id="nn">
            <div class="card-header" id="hd1">
                <h2 class="mb-2" >
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#coll3">
                        Amount is not refunded?
                    </button>
                </h2>
            </div>
            <div id="coll3" class="collapse">
                <div class="card-body">
                    Alzheimer’s Disease (AD), is a neurodegenerative disease. It is the most common cause of dementia. AD affects the patients cognitive and behav- ioral skills. The current clinical tests are inaccurate, making it hard to detect and diagnose the problem correctly. In this project we will use machine learning techniques in order to find a better way to detect and diagnose Alzheimer’s Disease. We will use MRI data obtained from the OASIS database with different machine learning algorithms, to find out an accurate means of diagnosing Alzheimer’s Disease
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</body>