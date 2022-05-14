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
                                <title>Crime Story Page</title>

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


    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">


                    <div class="media-body mb-5 text-white">
                        <h1 class="mt-0 mb-0"> <?php echo $_SESSION['ses_title']  ?></h1>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>
                            <?php echo $_SESSION['ses_caption'] ?>
                        </p>
                    </div>


                </div>
            </div>
    

            <div class="px-4 py-3">
                <div class="p-4 rounded shadow-sm bg-light">
                    <h1 class="text-info text-center">Crime Stories</h1>
                    <?php
                        echo "<p class='text-center blockquote-footer'>NOTE: you can only access these links online. Happy Reading, Happy Collecting! <p/>";
                    ?>


                    <li class="list-inline-item text-center">
                        <?php 
                            echo "<img src='images/crime.jpg'>";
                            echo "<br/>";

                            echo '<a href="https://short-stories.co/stories/the-beetle-hunter-GgdNOEgNxom">The Beetle-Hunter</a>';
                            echo "<br/>";

                            echo '<a href="https://short-stories.co/stories/the-murders-in-the-rue-morgue-Zz757W4RgYy">The Murders in the Rue Morgue</a>';
                            echo "<br/>";

                            echo '<a href="https://short-stories.co/stories/the-resident-patient-rV4RZ4JnZQA">The Resident Patient</a>';
                            echo "<br/>";

                            echo '<a href="https://short-stories.co/stories/the-invisible-man-Mp82qkmRjE3">The Invisible Man</a>';
                            echo "<br/>";

                            echo '<a href="https://storymirror.com/read/english/story/hustle/05ia5nl4">Hustle</a>';
                            echo "<br/>";
                        ?>
                        <br/>

                    </li>
                    <div class="bg-light p-4 text-right ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <h5><a class="btn btn-outline-info btn-sm btn-block" href="stories.php">Back</a></h5>
                                </li>
                            </ul>
                    </div>

                </div>
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