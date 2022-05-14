<?php 

//start the session
session_start();

if (isset($_SESSION['ses_username'])===false) {
   header("Location: index.php?logfirst"); 


} elseif (isset($_REQUEST['logout'])===true) {
    session_destroy();
    header("Location: index.php?logout");
}



?>

<!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Read More</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/nice-select.css">          
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">


    <div class="col-md-10 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
                <div class="media align-items-end profile-head">


                    <div class="media-body mb-5 text-info">
                        <h1 class="mt-0"> <?php echo $_SESSION['ses_title']  ?></h1>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>
                            <?php echo $_SESSION['ses_caption'] ?>
                        </p>
                        

                        <!-- About Generic Start -->
                        <div class="main-wrapper">

                            <div class="bg-light p-4 text-right ">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <h5><a class="btn btn-outline-info btn-sm btn-block" href="home.php#collections">Back</a></h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5><a class="btn btn-outline-info btn-sm btn-block" href="info.php"> Info </a></h5>
                                    </li>
                                </ul>
                            </div>
                        </div>

                            
                            <!-- Start video-sec Area -->
                            <section>
                                <div class="container">
                                    <div class="row justify-content-start align-items-center">
                                                             
                                        <div class="col-lg-6">
                                            <?php 
                                                echo "<img src='images/reading.jpg'>";
                                                echo "<br/>";
                                            ?>
                                            <h6>Collect, Read all that you can.</h6>
                                            <h1>The more you read, the more things you will know! </h1>
                                            <p><span>Reading can open the door to endless possibilities. </span></p>
                                        </div>
                                    </div>
                                </div>  
                            </section>
                            <!-- End video-sec Area -->



                                <?php
                                $stories = simplexml_load_file("files/story.xml");
                                if(isset($_REQUEST['id'])){

                                    foreach ($stories->story as $story){
                                        
                                        if($story->id == $_REQUEST['id']){ 

                                ?>


                            <!-- Start Generic Area -->
                            <section class="about-generic-area section-gap">
                                <div class="container border-top-generic">
                                    <h3 class="about-title mb-30"> <?php echo $story->title; ?> </h3>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="img-text">
                                                <p class="text-dark"> <?php echo $story->author." - ".$story->date; ?> </p>
                                                <p class="text-dark"> <?php echo $story->content; ?> </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                         <!-- End Generic Start -->  

                         <?php 
                                    }//end of if
                                }//end of foreach
                            } //end of isset
                        ?>

                </div>
            </div>
                

                <!--------- Start of Footer---------->
                <div class="p-4 rounded shadow-sm bg-light text-center">
                    <div class="bg-light p-4 text-right ">
                        <ul class="list-inline mb-0">
                            <li >
                                <a href="?logout" class="btn btn-outline-warning btn-sm btn-block">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                    <p class="font-italic mb-0">All Rights Reserved. Copyright 2022</p>
                </div>

                <!-----------end of footer ---------->

            </div>



        </div>
    </div>
</div>
                                <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
                                </body>
                            </html>