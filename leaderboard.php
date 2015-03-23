<?php
require_once 'header.php';
    // Send variables for the MySQL database class.
    $database = mysql_connect('localhost', 'root', 'password') or die('Could not connect: ' . mysql_error());
    mysql_select_db('robinsnest') or die('Could not select database');
 
    $query = "SELECT * FROM `members` ORDER by `quiz_score` DESC LIMIT 10";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
 
    $num_results = mysql_num_rows($result);  
 
    for($i = 1; $i <= $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         echo "<table>
  <tr>
    <th>Position</th>
    <th>User Name</th>		
    <th>Score</th>
  </tr>
  <tr>
    <td>".$i."</td>
    <td>".$row['user']."</td>		
    <td>".$row['quiz_score']."</td>
  </tr>
  
</table>";
    }
    echo '<footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>';
?>
</body>
</html>