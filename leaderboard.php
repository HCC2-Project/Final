<?php
 require_once 'header.php';

  echo "<br><span class='main'>Welcome to $appname,";

  if ($loggedin) echo " $user, you are logged in.";
  else           echo ' please sign up and/or log in to join in.';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

      echo<<<_END
  ' <div class="container marketing">



            <!-- START THE FEATURETTES -->

           
<head>
<title>Leaderboard</title>
<link rel ="stylesheet" type="text/css" href="leaderboard.css"/>
<meta http-equiv="Content-Type" content="leaderboard/php;charset=utf-8" />
</head>
<body>
<div id="Wrapper">
<div id="Header"><h1>WELCOME TO THE LEADERBOARD</h1></div>
	<form method="post" action="write.php">
		<input type="text" name="name" value="Name" /><br \>
		<input type="text" name="score" value="Score" /><br \> <br \> <br \> <br \> 
		<input type="submit" value="Submit Score to Leaderboards" />
	</form>
	
	<div id ="sidebarR">

<h2>LEADERBOARD RESULTS</h2>
<input type="text"name="place" value="1."/>
<input type="text"name="place" value="2."/>
<input type="text"name="place" value="3."/>
<input type="text"name="place" value="4."/>
<input type="text"name="place" value="5."/>
<input type="text"name="place" value="6."/>
<input type="text"name="place" value="7."/>
<input type="text"name="place" value="8."/>
<input type="text"name="place" value="9."/>
<input type="text"name="place" value="10."/>
</div>
</div>	


            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->'
            
_END;
?>
    </span><br><br>
  </body>
</html>
