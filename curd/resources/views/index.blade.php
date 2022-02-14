
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
h2,#Link {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
h1{
  
  text-shadow: 2px 1px 2px #000000;
}

</style>
     
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--Bootstrap Awesome CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Google Font-->
    <link href= "https://fonts.googleaois.com/css?family=Ubuntu&display=swap" rel="stylesheet">


    <!--Custom CSS-->
     <link rel="stylesheet" href="css/custom.css">
     <link rel="stylesheet" href="stylesheet.css">

    <title>iPEL</title>
</head>
<body style="background-color:#C8F6FE;">
<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top" style="background:#4682B4;">
<i class="fa fa-cog fa-spin fa-2x fa-fw text-white" id="Link"></i>
    <a href="index.php" class="navbar-brand"><h2>iPEL</h2></a>
    <span class="navbar-text">Customer Services</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id = "myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
     
      <!-- Button trigger modal -->

        <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#RegistrarionModal">Registration</a></li>
     <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#LoginModal">Login</a></li>
     <!-- <li class="nav-item"><a href="Requester/CustomerRegister.php" class="nav-link">Registration</a></li> 
        <li class="nav-item"><a href="Requester/CustomerLogin.php" class="nav-link">Login</a></li>-->
       
    
        <li class="nav-item"><a href="Requester/customerDashboard.php" class="nav-link">Profile</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>

        </ul>
    </div>

</nav><!-- End Navigation-->

<!--Start Slider-->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner mt-5">
    <div class="carousel-item active">
      <img src="{{ asset('images/pel3.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/pe15.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/pel6.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/pel4.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/pel.jpg') }}" class="d-block w-100" alt="...">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 


<!--Start Introduction Section Container-->
<div class="container mt-5">
    <div class="jumbotron " style="background:#4682B4;">
        <h3 class="text-center text-white">iPEL Sevices</h3>
        <p class="text-white"> iPEL was founded in 2017 through technical collaboration with AEG. 
            In 2019, PEL was acquired by Saigol Group and was taken public a decade later.
            Over the years, PEL has formed alliances with several international giants, 
            including General Electric, Fujitsu, and Hitachi.
            The system is modeled to be used by a Manufacturing company,
            whose main activity is manufacturing different products &
            then selling the finished goods through a network of Dealers.</p>

    </div>

</div><!--End Introduction Section Container-->

<!--Start Sevices Section-->
<section class="pricing" id="pricingdiv">
<div class="container container text-center border-bottom mt-5 pricingdiv" id="Services">
<h1 class="p-5">Our Services</h1>
 <div class="row mt-5">
        <div class="col-md-4 col-sm-6">
          
                <div class="card shadow-lg ">
                    <h4 class="card-title  text-white   p-2" style="background:#4682B4;">AC</h4>
                    <div class="card-body ">
                    <img src="{{ asset('images/AC.jpg') }}" class="img-fluid" alt="PEL"></a> 
                    </div>
                </div><br><br>
        </div>
        <div class="col-md-4 col-sm-6">
                <div class="card shadow-lg ">
                    <h4 class="card-title  text-white   p-2" style="background:#4682B4;">Refigenrator</h4>
                    <div class="card-body ">
                    <img src="{{ asset('images/refi.jpg') }}" class="img-fluid" alt="PEL"></a> 
                    </div>
                </div><br><br>
        </div>
        <div class="col-md-4 col-sm-6">
          
            <div class="card shadow-lg ">
                <h4 class="card-title  text-white   p-2" style="background:#4682B4;">Microwave</h4>
                <div class="card-body ">
                <img src="{{ asset('images/micro.jpg') }}" class="img-fluid" alt="PEL"></a> 
                </div>
            </div><br><br>
    </div>

  </div>
</div>
</section>

 
<!--Start Happy Customer-->
<div class="jumbotron " style="background:#4682B4;">
    <div class="container">
        <h2 class="text-center text-white">Happy Customers</h2>
      
        <div class="row mt-5">
        
            <!--Card 1-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
               
                        <img src="{{ asset('images/zahidd.jpg') }}" class="card-img-top" alt="zahid"
                        style="border-radius:100px;">
                     
                    <div class="card-body text-center">
                        <h4 class="card-title">Zahid Mughal</h4>
                        <p class="card-text">Software engineering is the process of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div>
            <!--Card 2-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                <img src="{{ asset('images/amna.jpg') }}" class="card-img-top" alt="amna"
                        style="border-radius:100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Amna Ashfaq</h4>
                        <p class="card-text">Software engineering is the process of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div>
            <!--Card 3-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                <img src="{{ asset('images/gill.jpg') }}" class="img-fluid" alt="gill"
                        style="border-radius:100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Usman Gill</h4>
                        <p class="card-text">Software engineering is the process of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div>
            <!--Card 4-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                <img src="{{ asset('images/afaq.jpg') }}" class="img-fluid" alt="afaq"
                        style="border-radius:100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Malik Afaq</h4>
                        <p class="card-text">Software engineering is the process
                             of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div><!--end cards-->
  
      </div>
    </div>
</div>
<!--Start Content Us-->
<div class="container" id="contact">
    <h1 class="text-center mb-4">Contact Us</h1>
    <div class="row">
<!--Start 1st Colum-->
<div class = "col-md-8"><!--Start 1st Colum-->
    <form action="" method ="POST">
    <input type="text" class="form-control" name="name"
    placeholder="Name"><br>
    <input type="text" class="form-control" name="subject"
    placeholder="Subject"><br>
    <input type="email" class="form-control" name="email"
    placeholder="Email"><br>
    <textarea class="form-control" name="message"
    placeholder="How can we help you?" style="height:150px;"></textarea><br>
    <input type="submit" class="btn btn-primary" value="Send"
    name="submit"><br><br>

    </form>
</div><!-- End 1st Colum--->
<!--End 1st Colum-->
        <div class="col-md-4 stripe text-center text-white"><!--Start 2nd colum-->
            <strong>Headquarter:</strong><br>
            <p> iPEL pvt Ltd <br>
            DHA Phase 3rd, Lahore <br>
            Punjab - 22123345 <br>
            Phone: +9211223341 <br>
            <a href="#" target="_blank">www.ipel.com</a><br>
            </p>
        </div><!--End 2nd colum-->
    </div>
</div><!--End Content Us-->

<!--Start Footer-->
<footer class="container-fluid  mt-5 text-white" style="background:#4682B4;">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6"><!--Start 1st Colum-->
                <span class="pr-2">Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color">
                <i class="fa fa-facebook-square text-dark"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                <i class="fa fa-twitter text-dark""></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                <i class="fa fa-youtube text-dark""></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                <i class="fa fa-google-plus text-dark""></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                <i class="fa fa-rss text-dark""></i></a>
            </div><!--End 1st Colum-->
            <div class="col-md-6 text-right"><!--Start 2nd colum-->
                <small>Designed by Zahid Mughal &copy; 2020</small>
                <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                <small class="ml-2"><a href="Technician/login.php">Technician Login</a></small>
            </div><!--End 2nd colum-->
        </div>
    </div>
</footer>
<!--End Footer-->



<!-- Java Script -->
<script src="js/Jquery.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <!-- Ajax Call Customer Requests-->
 <script type="text/javascript" src="js/Ajaxrequests.js"></script>

 </body>
</html>