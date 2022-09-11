@extends('Layouts.app')
@section('content')
<?php 
// session_start();
// if (isset($_SESSION['studentnumber']) && isset($_SESSION['password'])){
//         header("Location: accountancy.php");
// }
//        else{
           ?>
    
{{-- <!DOCTYPE html>
<html> --}}

<head>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis and Research Recommender</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/css/styles.min.css"> --}}
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


 
        
    <div class="container">
        <img class="imghover" src="{{ URL('images/course/education_banner.jpg') }}" style="height:300px; width:100%; border-style: inset;">
    </div>
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
    <footer class="col-12">
    <?php 
         ?>
    </footer>


{{-- 

</html>
<?php //}
 ?> --}}
 @endsection