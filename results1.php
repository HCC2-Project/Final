<?php
require_once 'header.php';
echo '
<p align="center"><strong><font face="Arial"><big> Quiz Results</font></strong></strong></p>
<div align="center"><div>

<table border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td width="100%"><form method="POST" name="result" action="results1.php"><table border="0" width="100%" cellpadding="2">
        </tr>
        <tr>
          <td height="5" font weight="strong" bgcolor="#009900"><strong><font color="black">Correct Answers:</font></strong></td>
           <td height="5"><input type ="text" name="T2" rows="1" cellpadding="1" cols="25" wrap="virtual"></textarea></td>
        </tr>
        <tr>
          <td height="5" font weight="strong" bgcolor="#FF0000"><strong><font color="black">Incorrect Answers:</font></strong></td>
          <td height="5"><textarea name="T2" rows="1" padding="1" cols="25" wrap="virtual"></textarea></td>
        </tr>
        <tr>
          <td height="5" font weight="strong" bgcolor="#009900"><strong><font color="black">Score achieved in Percentage:</font></strong></td>
          <td height="5"><input type="text" name="T2" rows="1" cellpadding="1" cols="25" wrap="virtual"></textarea></td>
        </tr>
       </table>
       <input type="submit" name="submit" value="enter score" class="btn btn-lg btn-primary btn-block">
    </form>
    </td>
  </tr>
</table>
</center></div>

<form method="POST"><div
  align="center"><center><p>

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
<br>
<input type="button" value="Take the quiz again" name="B1"
  onClick="history.go(-1)"> <input type="button" value="View solution" name="B2"
  onClick="showsolution()"></p>
  </center></div>
</form>';


$connection = mysql_connect("localhost", "root", "password"); // Establishing Connection with Server
$db = mysql_select_db("robinsnest", $connection); // Selecting Database from Server
if(isset($_POST["submit"])){ // Fetching variables of the form which travels in URL
    if (isset($_SESSION["user"])){
//Insert Query of SQL
        $score = $_POST["T2"];
$query = mysql_query("update members set quiz_score='$score' where user='$user'");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
    echo"You must be logged in to update your score in leaderboard!";  
}
}

mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>

