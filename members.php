<?php 
/*
     * @author Robin Nixon
     * @Date 10/03/2015
       @Source http://lpmj.net/4thedition/ 
     * 
     */
// Example 26-9: members.php
  require_once 'header.php';
  
echo"<link href='CSS/styles.css' rel='stylesheet' type='text/css'/>"  ;

  if (!$loggedin) die();
  /*
Getting individual rank of user from leaderboard
@author 
@date 17/04/2015
@source http://stackoverflow.com/questions/1293817/mysql-get-users-rank
*/

  $database = mysql_connect('localhost', 'root', 'password') or die('Could not connect: ' . mysql_error());
  mysql_select_db('robinsnest') or die('Could not select database');

  $query = "
      SELECT  uo.*, 
        (
        SELECT  COUNT(*)
        FROM    members ui
        WHERE   (ui.quiz_score, ui.id) >= (uo.quiz_score, uo.id)
        ) AS rank
FROM    members uo
  WHERE user =  '$user';";

    $result = mysql_query($query) or die('Query failed: ' . mysql_error());

    $num_results = mysql_num_rows($result);  

    while($row = mysql_fetch_array($result)){
?>    <div class="container marketing">
   
        <h3><?php echo $row['user']." You are ranked number - ".$row['rank']; ?></h3>
    
</div>

  <?php
  if($row['rank']==1){
      echo '<iframe src="//giphy.com/embed/128Ygie2wLdH5m?html5=true" width="480" height="600" frameBorder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
  }
  if($row['rank']==2){
      echo '<iframe src="//giphy.com/embed/107KNI7aP9vA0U?html5=true" width="480" height="451" frameBorder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
  }
  if($row['rank']==3){
      echo '<iframe src="//giphy.com/embed/OTPuTLxwOyN1K?html5=true" width="480" height="270" frameBorder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
  }
    } 
  
         echo"<div class='container marketing'>
        <div class='col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3'>"
    
  . "<ul class='menus'>" .
         "<li><a href='members.php'>Members</a></li>"        .
         "<li><a href='messages.php'>Messages</a></li>"       .
         "<li><a href='profile.php'>Edit Profile</a></li>"    .
         "<li><a href='logout.php'>Log out</a></li></ul><br>";
  echo "<div class='main'>";

  if (isset($_GET['view']))
  {
    $view = sanitizeString($_GET['view']);
    
    if ($view == $user) $name = "Your";
    else                $name = "$view's";
    
    echo "<h3>$name Profile</h3>";
    showProfile($view);
    
    echo "<a class='button' href='messages.php?view=$view'> View $name messages</a><br><br>";
            echo'</div></div>';
 
    die("</div></body></html>");
   
  }

  if (isset($_GET['add']))
  {
    $add = sanitizeString($_GET['add']);

    $result = queryMysql("SELECT * FROM friends WHERE user='$add' AND friend='$user'");
    if (!$result->num_rows)
      queryMysql("INSERT INTO friends VALUES ('$add', '$user')");
  }
  elseif (isset($_GET['remove']))
  {
    $remove = sanitizeString($_GET['remove']);
    queryMysql("DELETE FROM friends WHERE user='$remove' AND friend='$user'");
  }

  $result = queryMysql("SELECT user FROM members ORDER BY user");
  $num    = $result->num_rows;

  echo "<h3>Other Members</h3><ul><br>";

  for ($j = 0 ; $j < $num ; ++$j)
  {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($row['user'] == $user) continue;
    
    echo "<li><a href='members.php?view=" .
      $row['user'] . "'>" . $row['user'] . "</a>";
    $follow = "follow";

    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='" . $row['user'] . "' AND friend='$user'");
    $t1      = $result1->num_rows;
    $result1 = queryMysql("SELECT * FROM friends WHERE
      user='$user' AND friend='" . $row['user'] . "'");
    $t2      = $result1->num_rows;

    if (($t1 + $t2) > 1) echo " &harr; is a mutual friend";
    elseif ($t1)         echo " &larr; you are following";
    elseif ($t2)       { echo " &rarr; is following you";
      $follow = "recip"; }

 if (!$t1) {
        echo " [<a href='members.php?add=" . $row['user'] . "'>$follow</a>]";
    } else {
        echo " [<a href='members.php?remove=" . $row['user'] . "'>drop</a>]";
    }
}
echo "</ul></div>"
. "</div>"
        . "</div>
<hr class='featurette-divider'>";
  
?>
  </body>
</html>
