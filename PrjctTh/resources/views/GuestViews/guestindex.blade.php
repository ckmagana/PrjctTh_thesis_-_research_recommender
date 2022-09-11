<?php 
// session_start();
// if (isset($_SESSION['studentnumber']) && isset($_SESSION['password'])){
//         header("Location: home.php");
// }
//        else{
           ?>
    
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis and Research Recommender</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <style>
        .imghover:hover{
            -ms-transform: scale(1.2); /* IE 9 */
            -webkit-transform: scale(1.2); /* Safari 3-8 */
            transform: scale(1.2); 
        }
        .nav-link{
            background-color: green;
            border-radius: 25px;
        }
    </style>
</head>

<body style="background-image: linear-gradient(to left, green,#fde8ec); height: 100%;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#"><img src="assets/img/tech/plplogo.png" alt="PLP Logo" style="width: 50px; height: 50px;">Thesis and Research</a>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="loginform.php" style="color:#000000;">Sign In</a></li>
            </ul>
        </div>
    </nav>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">Company Name</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">First Item</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a href="#" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
            <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav"></ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" name="search" id="search-field" style="color:rgb(0,0,0);background-color:#e8e8e8;width:900px;"></div>
                    </form><button class="btn btn-dark mr-auto" type="button" style="background-color:rgb(255,255,255);color:rgb(0,0,0);">Search</button></div>
            </div>
        </nav>
    </div>
    <div>
    
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
            <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" style="margin-right: 125px;" role="presentation"><a class="nav-link" style="color:white;" href="guesteducation.php">Education</a></li>
                        <li class="nav-item" style="margin-right: 130px;" role="presentation"><a class="nav-link" style="color:white;" href="guestcomputer.php">Computer</a></li>
                        <li class="nav-item" style="margin-right: 115px;" role="presentation"><a class="nav-link" style="color:white;" href="guestnursing.php">Nursing</a></li>
                        <li class="nav-item" style="margin-right: 50px;" role="presentation"><a class="nav-link" style="color:white;" href="guesthotelmanagement.php">Hotel Management</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:white;" href="guestaccountancy.php">Accountancy</a></li>
                    </ul><span class="navbar-text actions"> </span></div>
            </div>
        </nav>
    </div>
    <div class="container-fluid" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff; width:auto; margin-bottom: 250px;">
        <img class="imghover" src="assets/img/course/educationbanner.jpg" style="height:300px;width:170px; margin-left: 90px; margin-right: 70px;">
        <img class="imghover" src="assets/img/course/computersciencebanner.jpg" style="width:170px;height:300px; margin-right: 70px;">
        <img class="imghover" src="assets/img/course/nursingbanner.jpg" style="width:170px;height:300px; margin-right: 70px;">
        <img class="imghover" src="assets/img/course/hotelmanagementbanner.jpg" style="width:170px;height:300px; margin-right: 70px;">
        <img class="imghover" src="assets/img/course/accountancybanner.jpg" style="width:170px;height:300px;">
    </div>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark" style="background-image: linear-gradient(to left, green,#fde8ec);">
            <div class="container">
                <div class="block-content" style="border-style: inset;">
                    <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                            <div class="col-lg-7">
                                <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                        </div>
                    </div>
                    <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                            <div class="col-lg-7">
                                <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                        </div>
                    </div>
                    <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                            <div class="col-lg-7">
                                <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                        </div>
                    </div>
                    <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                            <div class="col-lg-7">
                                <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                        </div>
                    </div>
                    <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                            <div class="col-lg-7">
                                <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <footer class="col-12">
    <?php 
        // include "footer.php"; ?>
    </footer>
</body>



</html>
<?php //}
 ?>