<?php // Example 26-2: header.php
  session_start();

  echo "<!DOCTYPE html>\n<html><head>"
  . "<meta charset='utf-8'>"
          . "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"
          . "<meta name='viewport' content='width=device-width, initial-scale=1'>"
          . "<meta name='description' content=''>"
          . " <meta name='author' content=''>"
          . "<link rel='icon' href='../../favicon.ico'>"
          . "<link href='CSS/bootstrap.min.css' rel='stylesheet' type='text/css'/>"
          . "<link href='CSS/carousel.css' rel='stylesheet' type='text/css'/>"
          . "<script src='JS/ie-emulation-modes-warning.js' type='text/javascript'></script>"
          . "<link rel='stylesheet' href='CSS/main.css' type='text/css'>";
        
        
       
        

  require_once 'functions.php';

  $userstr = ' (Guest)';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
  }
  else $loggedin = FALSE;

  echo "<title>$appname$userstr</title><link rel='stylesheet' " .
       "href='styles.css' type='text/css'>"                     .
       "</head>"
          . "<body>"
       ."<script src='javascript.js'></script>";
      echo ' <div class="navbar-wrapper">
            <div class="container">

                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Computer History</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="signup.php">Signup</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="aboutus.html">About Us</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Computer Generations <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="1st_generation.html">First Generation</a></li>
                                        <li><a href="2nd_generation.html">Second Generation</a></li>
                                        <li><a href="3rd_generation.html">Third Generation</a></li>
                                        <li><a href="4th_generation.html">Fourth Generation</a></li>
                                        <li><a href="5th_generation.html">Fifth Generation</a></li>
                                    </ul>
                                </li>

                                <li><a href="quizzes.html">Quiz Test</a></li>
                            </ul>
                            
                        </div>';
                        echo "<div class='appname'>$appname$userstr</div>
                    </div>";
      
      echo '         
                </nav>

            </div>
        </div>


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#" data-slide-to="0" class="active"></li>
                <li data-target="#" data-slide-to="1"></li>
                <li data-target="#" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://4.bp.blogspot.com/-Hq8goCGjhUY/Ueapox54g8I/AAAAAAAAAGE/HMgwwT-SeZA/s320/1.png" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">                            
                            <p><a href="login.html" class="btn btn-lg btn-primary" role="button">Login</a></p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="http://s7.computerhistory.org/is/image/CHM/500004505-03-01?$re-zoomed$" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <p><a href="quizzes.html" class="btn btn-lg btn-primary" role="button">Quizzes</a></p>
                        </div>
                    </div>
                </div>                

                <div class="item">
                    <img src="http://it-history.net/images/A_wall_of_historic_computers.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <p><a href="register.html" class="btn btn-lg btn-primary" role="button">Sign Up</a></p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="http://www.tnmoc.org/sites/default/files/fi_large.jpg" alt="Fourth slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="http://www.benryves.com/images/bletchley_park/2010.05.08/23-WITCH.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>First Generation</h3>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <img class="img-circle" src="http://www.techiwarehouse.com/userfiles/ic-chip-example.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Second Generation</h3>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <img class="img-circle" src="http://i.ytimg.com/vi/gHm5_74nP38/hqdefault.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Third Generation</h3>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->



            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

           

            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="JS/bootstrap.min.js" type="text/javascript"></script>
        <script src="JS/docs.min.js" type="text/javascript"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="JS/ie10-viewport-bug-workaround.js" type="text/javascript"></script>';


?>
