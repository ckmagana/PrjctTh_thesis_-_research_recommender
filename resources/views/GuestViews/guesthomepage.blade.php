@extends('Layouts.app')
@section('content')
    <nav class="navbar navbar-light navbar-expand-lg clean-navbar" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#"><img src="assets/img/tech/plplogo.png" alt="PLP Logo" style="width: 50px; height: 50px;">Thesis and Research</a>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="loginform.php" style="color:#000000;">Sign In</a></li>
            </ul>
        </div>
    </nav>
    <div>
        <nav style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
            <div class="container">
                    <ul class="nav navbar-nav"></ul>
                    <?php 
                    //$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                    ?>
                    <form class="form-inline" method="POST">
                        <div class="form-group w-100 d-flex justify-content-center"><input class="form-control w-75" type="search" name="search_bar" id="search-field" style="height: 40px;"><input class="btn form-group" type="submit" name = "search" value = "Search" style="background-color:rgb(255,255,255);color:rgb(0,0,0); margin-left: 10px;"></div>
                        <input type="hidden" name="page" value="<?php //echo $curPageName ?>">
                    </form>
                    <?php
    
                    // if(isset($_POST['search'])){

                    //     $searchoutput = $_POST['search_bar'];
                        
                    //     $webpage = $_POST['page'];
                        
                    //     if($webpage == "guestindex.php" ){
                    //         //echo "<script>alert('test')</script>";
                    //         $sql = $conn->query("SELECT * FROM tnr_dataset WHERE (`Title` LIKE '%".$searchoutput."%')" );
                    //     }
                    //     elseif($webpage == "guestaccountancy.php"){
                    //         //echo $curPageName;
                    //         $sql = $conn->query("SELECT * FROM tnr_dataset WHERE College = 'Accountancy' AND `Title` LIKE '%".$searchoutput."%'");
                    //     }elseif($webpage == "guestcomputer.php"){
                    //         //echo $curPageName;
                    //         $sql = $conn->query("SELECT * FROM tnr_dataset WHERE College = 'Computer Science' AND `Title` LIKE '%".$searchoutput."%'");
                    //     }
                    //     elseif($webpage == "guesteducation.php"){
                    //         //echo $curPageName;
                    //         $sql = $conn->query("SELECT * FROM tnr_dataset WHERE College = 'Education' AND `Title` LIKE '%".$searchoutput."%'");
                    //     }
                    //     elseif($webpage == "guesthotelmanagement.php"){
                    //         //echo $curPageName;
                    //         $sql = $conn->query("SELECT * FROM tnr_dataset WHERE College = 'Hotel Management' AND `Title` LIKE '%".$searchoutput."%'");
                    //     }
                    //     elseif($webpage == "guestnursing.php"){
                    //         //echo $curPageName;
                    //         $sql = $conn->query("SELECT * FROM tnr_dataset WHERE College = 'Nursing' AND `Title` LIKE '%".$searchoutput."%'");
                    //     }
                    // }
                    ?>
            </div>
        </nav>
    </div>
    <div>
    
        <nav class="" style="background-image: linear-gradient(to left, green,#fde8ec); color: #fff;">
            <div class="container-fluid">
                <div>
                    <ul class="container-fluid d-flex justify-content-center">
                        <li class="nav-item d-flex justify-content-center d-block mx-1 my-2" role="presentation"><a class="nav-link" style="color:white;" href="guesteducation.php">Education<br/><img class="" src="assets/img/course/educationbanner.jpg" style="height:300px; width:140px"></li></a>
                        
                        <li class="nav-item d-flex justify-content-center d-block  mx-1 my-2" role="presentation"><a class="nav-link" style="color:white;" href="guestcomputer.php">Computer<br/><img class="" src="assets/img/course/computersciencebanner.jpg" style="height:300px; width:140px"></li></a>
                        
                        <li class="nav-item d-flex justify-content-center d-block  mx-1 my-2" role="presentation"><a class="nav-link" style="color:white;" href="guestnursing.php">Nursing<br/><img class="" src="assets/img/course/nursingbanner.jpg" style="height:300px; width:140px"></li></a>

                        <li class="nav-item d-flex justify-content-center d-block  mx-1 my-2" role="presentation"><a class="nav-link" style="color:white;" href="guesthotelmanagement.php">Hotel Management<br/><img class="" src="assets/img/course/hotelmanagementbanner.jpg" style="height:300px; width:140px"></li></a>
                        
                        <li class="nav-item d-flex justify-content-center d-block  mx-1 my-2" role="presentation"><a class="nav-link" style="color:white;" href="guestaccountancy.php">Accountancy<br/><img class="" src="assets/img/course/accountancybanner.jpg" style="height:300px; width:140px"></li></a>
                        
                    </ul><span class=""> </span></div>
            </div>
        </nav>
    </div>


    <main class="page blog-post-list">
    <section class="clean-block clean-blog-list dark" style="background-image: linear-gradient(to left, green,#fde8ec);">
            <div class="container">
                <div class="block-content" style="border-style: inset;">

                <?php 
                //    $per_page_record = 10;  // Number of entries to show in a page.   
                //    // Look for a GET variable page if not found default is 1.        
                //    if (isset($_GET["page"])) {    
                //        $page  = $_GET["page"];    
                //    }    
                //    else {    
                //      $page=1;    
                //    }    
               
                //    $start_from = ($page-1) * $per_page_record;   
                //    if(!isset($_POST['search'])){  
                //     $sql = $conn->query("SELECT * FROM tnr_dataset LIMIT $start_from, $per_page_record;"); 
                //    }
                    
                //     if($sql){   
                //         while($row = $sql->fetch_assoc()){
                //             $title = $row['Title'];
                //             $author = $row['Author'];
                //             $year = $row['Year'];
                //             $kind = $row['Kind_of_Paper'];
                //             $college = $row['College'];
                //             $content = $row['Content']; 
                //             $links = $row['Links'];
                
                ?>
                    <div class="clean-blog-post" style="padding:20px; margin: 10px; border-style: inset;">
                        <div class="row">
                            <div class="col-lg-5"><embed src="<?php //echo $links ?>" width="100%" height="100%" style="border-style: solid"/></div>
                            <div class="col-lg-7">
                                <h3 style="color:black;"><?php //echo $title; ?></h3>
                                <div class="info" style="color:black;"><span class="text-muted"><?php //echo $year; ?> by&nbsp;<?php //echo $author; ?>&nbsp;&nbsp;(<?php //echo $kind; ?>)</span></div>
                                <p style="color:black;"><?php //echo $content; ?> </p><button class="btn btn-outline-primary btn-sm" type="button"><a class="disabled-link" href="<?php //echo $links ?>">Download PDF here</a></button></div>
                        </div>
                    </div>
                    <?php //}
                        //}
                     ?>
                     <br>
                    <div class="d-flex justify-content-center">  
                        <?php  
                            // $sql = "SELECT COUNT(*) FROM tnr_dataset";     
                            // $rs_result = mysqli_query($conn, $sql);     
                            // $row = mysqli_fetch_row($rs_result);     
                            // $total_records = $row[0];     
                            
                            // echo "</br>";     
                            // // Number of pages required.   
                            // $total_pages = ceil($total_records / $per_page_record);     
                            // $pagLink = "";       
                        
                            // if($page>=2){   
                            //     echo "<button class='btn btn-dark' style='border: 2px solid #4CAF50;'><a href='guestindex.php?page=".($page-1)."'>  Prev </a></button>";   
                            // }       
                                    
                            // for ($i=1; $i<=$total_pages; $i++) {   
                            // if ($i == $page) {   
                            //     $pagLink .= "<button class='btn btn-dark' style='border: 2px solid #4CAF50;'><a style='' class='active' href='guestindex.php?page="  
                            //                                         .$i."'><b>".$i." </b></a></button>";   
                            // }               
                            // else  {   
                            //     $pagLink .= "<button class='btn btn-dark' style='border: 2px solid #4CAF50;'><a href='guestindex.php?page=".$i."'>   
                            //                                         ".$i." </a></button>";     
                            // }   
                            // };     
                            // echo $pagLink;   
                    
                            // if($page<$total_pages){   
                            //     echo "<button class='btn btn-dark' style='border: 2px solid #4CAF50;'><a href='guestindex.php?page=".($page+1)."'>  Next </a></button>";   
                            // }   
                        ?>    
                    </div>  
                </div>
            </div>
        </section>
    </main>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script> --}}
@endsection