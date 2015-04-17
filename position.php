<?php
  require_once 'header.php';
  $database = mysql_connect('localhost', 'root', 'password') or die('Could not connect: ' . mysql_error());
  mysql_select_db('robinsnest') or die('Could not select database');

  $query = "SELECT  user, quiz_score, FIND_IN_SET( quiz_score, (    
  SELECT GROUP_CONCAT( quiz_score
  ORDER BY quiz_score DESC ) 
  FROM members )
  ) AS rank
  FROM members
  WHERE user =  '$user';";

    $result = mysql_query($query) or die('Query failed: ' . mysql_error());

    $num_results = mysql_num_rows($result);  

    while($row = mysql_fetch_array($result)){
?>    
      <p><?php echo $row['user']." - ".$row['quiz_score']; ?></p>
  <?php
    } /* END OF WHILE LOOP */
  ?> 

  <hr class="featurette-divider">

  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>';

</body>
</html>