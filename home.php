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


<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Home Page</title>

                                <link href='css/bootstrap.min.css' rel='stylesheet'>

                                <script type='text/javascript' src='js/jquery.min.js'></script>

                                <style>.profile-head {
    transform: translateY(5rem)
}
.cover {
    background-image: url('images/header1.jpg');
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, white, skyblue);
    min-height: 100vh;
    overflow-x: hidden
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">


    <div class="col-md-10 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">


                    <div class="media-body mb-5 text-white">
                        <h1 class="mt-0 mb-0"> <?php echo $_SESSION['ses_title']  ?></h1>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>
                            <?php echo $_SESSION['ses_caption'] ?>
                        </p>
                        

                        <div class="bg-light p-4 text-right ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <h5><a class="btn btn-outline-info btn-sm btn-block" href="#">Home</a></h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><a class="btn btn-outline-info btn-sm btn-block" href="stories.php">Stories</a></h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><a class="btn btn-outline-info btn-sm btn-block" href="indexstory.php">Add Story </a></h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><a class="btn btn-outline-info btn-sm btn-block" href="#collections">Collections</a></h5>
                                </li>
                                
                                <li class="list-inline-item">
                                    <h5><a class="btn btn-outline-info btn-sm btn-block" href="info.php"> Info </a></h5>
                                </li>
                                <li class="list-inline-item">
                                    <a href="?logout" class="btn btn-outline-warning btn-sm btn-block">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
    

            <div class="px-4 py-3">
                <h2 class="mb-0 text-center text-info">WELCOME </h2>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0 text-center">Persona welcomes you. I hope you enjoy your stay with us.<br> This blog has developed from its humble beginnings as a repository for my many stories <br> to become one of the largest story collections on the internet. It's regularly updated with fresh new articles from the best writers.</p>
                </div>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex mb-3">
                    <h2 class="text-dark"><a id="collections" > Story-Collections</a></h2>
                </div>



                <div class="row">

                    <?php 
                        //load through all the data dispplay each rows
                    $stories = simplexml_load_file("files/story.xml");

                    //loop through all the data
                    foreach ($stories->story as $rows) {
                    ?>

                    <div class="col-lg-6 col-sm-6 single-blog">
                        <a href="read.php?id=<?php echo $rows->id; ?>"><h4> <?php echo $rows->title; ?> </h4></a>
                        <p>
                            <?php echo mb_strimwidth($rows->content, 0, 200, ". read more...") ?>
                        </p>
                        <p class="post-date">
                            <?php echo $rows->author." - ".$rows->date; ?>
                        </p>
                    </div>

                    <?php 
                    }
                    ?>

                </div>


            

                <div class="p-4 rounded shadow-sm bg-light text-center">
                    <p class="font-italic mb-0">All Rights Reserved. Copyright 2022</p>
                </div>

            </div>



        </div>
    </div>
</div>
                                <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
                                </body>
                            </html>