<?php
require_once 'header.php';
    // Send variables for the MySQL database class.
    $database = mysql_connect('localhost', 'root', 'password') or die('Could not connect: ' . mysql_error());
    mysql_select_db('robinsnest') or die('Could not select database');
 
    $query = "SELECT * FROM `members` ORDER by `quiz_score` DESC LIMIT 10";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
 
    $num_results = mysql_num_rows($result);  
 
    echo '<div class="container marketing">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <table class="gradienttable">
  <tr>
    <th>Position</th>
    <th>User Name</th>      
    <th>Score</th>
  </tr>';

    for($i = 1; $i <= $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         echo "<tr>
    <td>".$i."</td>
    <td>".$row['user']."</td>       
    <td>".$row['quiz_score']."</td>
  </tr>";
    }

echo "</table>
        </div>
            </div>";
echo"<hr class='featurette-divider'>";
    echo '            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>';
?>
</body>
</html>