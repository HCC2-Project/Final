<?php
    /*
     * @author Sena Onsho
     * @Date 22/03/2015
     * @Source http://www.javascriptkit.com
     * 
     */
require_once 'header.php';
?>


<script src="quizconfig.js">
</script>
<div class="container marketing">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
<div>
<h2> Quiz Results</h2>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><form method="POST" name="result"><table border-color="#2e6da4" border="0" width="100%" cellpadding="0" height="116">
        <tr>
          <td height="25"  bgcolor="#337ab7"><strong><font face="Arial" color ="#FFFFFF">Correct Answers:</font></strong></td>
       
          <td height="25"><p><textarea name="T2" rows="2" cols="40" wrap="virtual"></textarea></td>
   
        </tr>
        <tr>
          <td height="17" bgcolor="#337ab7"><strong><font face="Arial" color ="#FFFFFF">Incorrect Answers:</font></strong></td>
          <td height="17"><p><textarea name="T2" rows="3" cols="40" wrap="virtual"></textarea></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#337ab7"><strong><font face="Arial" color ="#FFFFFF">Grade in percentage:</font></strong></td>
          <td height="25"><textarea name="T2" rows="2" cols="40" wrap="virtual"></textarea></td>
        </tr>
        
      </table>
      <input type="submit" name="submit" value="enter score" class="btn btn-lg btn-primary btn-block">
    </form>
    </td>
  </tr>
</table>
</div>

<form method="POST">
    <div class="results"><p>

<script>
var wrong=0
for (i=0;i<=2;i++)
document.result[i].value=""

var results=document.cookie.split(";")
for (j=0;j<=results.length-1;j++){
if (results[j].charAt(1)=="q")
parse=j

}

var incorrect=results[parse].split("=")
incorrect=incorrect[1].split("/")
if (incorrect[incorrect.length-1]=="b")
incorrect=""
document.result[0].value=totalquestions-incorrect.length+" out of "+totalquestions
document.result[2].value=(totalquestions-incorrect.length)/totalquestions*100
for (i=0;i<incorrect.length;i++)
document.result[1].value+=incorrect[i]+", "


</script>

<input type="button" value="Take the quiz again" name="B1"
  onClick="history.go(-1)"> <input type="button" value="View solution" name="B2"
  onClick="showsolution()"></p>
  </div>
</form>

<?php
$connection = mysql_connect("localhost", "root", "password"); // Establishing Connection with Server
$db = mysql_select_db("robinsnest", $connection); // Selecting Database from Server
if(isset($_POST["submit"])){ // Fetching variables of the form which travels in URL
    if (isset($_SESSION["user"])){
//Insert Query of SQL
        $score = $_POST["T2"];
$query = mysql_query("update members set quiz_score='$score' where user='$user'");

}
else{
    echo"You must be logged in to update your score in leaderboard!</div>";  
}
}

mysql_close($connection); // Closing Connection with Server
?>
</div>
    </div>
<hr class="featurette-divider">
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

</body>
</html>

