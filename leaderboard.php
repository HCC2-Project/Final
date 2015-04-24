<?php
require_once 'header.php';
  // Send variables for the MySQL database class.
  $database = mysql_connect('localhost', 'root', 'password') or die('Could not connect: ' . mysql_error());
  mysql_select_db('robinsnest') or die('Could not select database');
/*SQL code for creating a rank that has the same quiz score.
 * @author....
 * @date 17/04/2015
 * @source http://code.openark.org/blog/mysql/sql-ranking-without-self-join
 */
  $query = "
      SELECT
  s1.id, s1.user, s1.quiz_score, COUNT(DISTINCT s2.quiz_score) AS rank
FROM
  members
  s1 JOIN members s2 ON (s1.quiz_score <= s2.quiz_score)
GROUP BY s1.id
having rank <= 10
ORDER by `rank` 
;";
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());

  $num_results = mysql_num_rows($result);  
  $ranking = 1;
?>


  <div class="container marketing">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
       
        <h2>Top 10 Leader-Board</h2>
        <br/>
      <table class="gradienttable">
        <tr>
          <th>Position</th>
          <th>User Name</th>      
         <th>Score</th>
        </tr>
  <?php
         while($row = mysql_fetch_array($result)){
           ?>
           <tr>
             <td><?php echo $row['rank']; ?></td>
             <td><?php echo $row['user']; ?></td>       
             <td><?php echo $row['quiz_score']; ?></td>
           <?php
            
           ?>
           </tr>
       <?php
         } /* END OF WHILE LOOP */
       ?>

      </table>
    </div>
  </div>

<hr class="featurette-divider">
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

</body>
</html>