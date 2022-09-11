 @extends('Layouts.app')
 
 @section('content')
 <?php //session_start();
 //if (isset($_SESSION['studentnumber']) && isset($_SESSION['password'])) { 
     ?>
 
 {{-- <!DOCTYPE html>
 <html> --}}
 <?php
 // include "database_connection.php";
 ?>
 <head>                          
     {{-- <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home Page</title>
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
     <link rel="stylesheet" href="assets/css/styles.min.css"> --}}
     <style>
         .imghover:hover{
             -ms-transform: scale(1.2); /* IE 9 */
             -webkit-transform: scale(1.2); /* Safari 3-8 */
             transform: scale(1.2); 
             transition: 0.5s;
         }
         .nav-link{
             background-color: green;
             border-radius: 25px;
         }
         
     </style>
 </head>
 
 <body style="background-image: linear-gradient(to left, green,#fde8ec);">
     <?php
         // include_once'profilequery.php';
         // include_once'navigation.php'; ?>
     <div>
         <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: linear-gradient(to left, green,#fde8ec);">
             <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                 <div class="collapse navbar-collapse"
                     id="navcol-1">
                     <ul class="nav navbar-nav mr-auto">
                         <li class="nav-item" style="margin-left: 33px; margin-right: 159px;" role="presentation"><label style="color: black;" >Education</label></li>
                         <li class="nav-item" style="margin-right: 167px;" role="presentation"><label style="color: black;" >Computer</label></li>
                         <li class="nav-item" style="margin-right: 143px;" role="presentation"><label style="color: black;" >Nursing</label></li>
                         <li class="nav-item" style="margin-right: 101px;" role="presentation"><label  style="color: black;" >Hotel Management</label></li>
                         <li class="nav-item" role="presentation"><label style="color: black;">Accountancy</label></li>
                     </ul><span class="navbar-text actions"> </span></div>
             </div>
         </nav>
     </div>
     <div class="container-fluid" style="width:auto;">
         <img class="imghover" src="{{ URL('images/course/educationbanner.jpg') }}" style="height:300px;width:170px; margin-left: 90px; margin-right: 70px;">
         <img class="imghover" src="{{ URL('images/course/computersciencebanner.jpg') }}" style="width:170px;height:300px; margin-right: 70px;">
         <img class="imghover" src="{{ URL('images/course/nursingbanner.jpg') }}" style="width:170px;height:300px; margin-right: 70px;">
         <img class="imghover" src="{{ URL('images/course/hotelmanagementbanner.jpg') }}" style="width:170px;height:300px; margin-right: 70px;">
         <img class="imghover" src="{{ URL('images/course/accountancybanner.jpg') }}" style="width:170px;height:300px;">
     </div>
     <br>
     <main class="page blog-post-list">
         <section class="clean-block clean-blog-list dark" style="background-image: linear-gradient(to left, green,#fde8ec);">
             <div class="container">
                 <div class="block-content" style="border-style: inset;">
                     <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                         <div class="row">
                             <div class="col-lg-5"><img class="rounded img-fluid" src="{{ URL('images/tech/image4.jpg') }}"></div>
                             <div class="col-lg-7">
                                 <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                 <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                 <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                     vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                         </div>
                     </div>
                     <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                         <div class="row">
                             <div class="col-lg-5"><img class="rounded img-fluid" src="{{ URL('images/tech/image4.jpg') }}"></div>
                             <div class="col-lg-7">
                                 <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                 <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                 <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                     vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                         </div>
                     </div>
                     <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                         <div class="row">
                             <div class="col-lg-5"><img class="rounded img-fluid" src="{{ URL('images/tech/image4.jpg') }}"></div>
                             <div class="col-lg-7">
                                 <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                 <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                 <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                     vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                         </div>
                     </div>
                     <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                         <div class="row">
                             <div class="col-lg-5"><img class="rounded img-fluid" src="{{ URL('images/tech/image4.jpg') }}"></div>
                             <div class="col-lg-7">
                                 <h3 style="color:black;">Lorem Ipsum dolor sit amet</h3>
                                 <div class="info" style="color:black;"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                 <p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                     vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                         </div>
                     </div>
                     <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                         <div class="row">
                             <div class="col-lg-5"><img class="rounded img-fluid" src="{{ URL('images/tech/image4.jpg') }}"></div>
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
 {{-- </body>
 
 </html> --}}
 
 <?php
 // }else{
 //     header("Location: guestindex.php");
 //     exit();
 // }
 ?>
 @endsection