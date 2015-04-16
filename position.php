<?php
require_once 'header.php';
$database = mysql_connect('localhost', 'root', 'password') or die('Could not connect: ' . mysql_error());
    mysql_select_db('robinsnest') or die('Could not select database');
 
    $query = "SELECT 
  SUM(quiz_score) as points 
    FROM members
    WHERE user = $user;";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
 
    $num_results = mysql_num_rows($result);  
 
    
echo"<hr class='featurette-divider'>";
    
    echo '            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>';
?>
</body>
</html>
