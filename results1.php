<?php
require_once 'header.php';
echo '
<p align="center"><strong><font face="Arial">

<big> Quiz Results</big></font></strong></p>
<div align="center"><center>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><form method="POST" name="result"><table border="0" width="100%" cellpadding="0" height="116">
        <tr>
          <td height="25" bgcolor="#009900"><strong><font face="Arial">Correct Answers:</font></strong></td>
          <td height="25"><p><input type="text" name="p" size="24"></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#FF0000"><strong><font face="Arial">Incorrect Answers:</font></strong></td>
          <td height="17"><p><textarea name="T2" rows="3" cols="24" wrap="virtual"></textarea></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#009900"><strong><font face="Arial">Grade in percentage:</font></strong></td>
          <td height="25"><input type="text" name="q" size="8"></td>
        </tr>
      </table>
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
document.result[2].value=(totalquestions-incorrect.length)/totalquestions*100+"%"
for (i=0;i<incorrect.length;i++)
document.result[1].value+=incorrect[i]+", "


</script>

<input type="button" value="Take the quiz again" name="B1"
  onClick="history.go(-1)"> <input type="button" value="View solution" name="B2"
  onClick="showsolution()"></p>
  </center></div>
</form>';
?>
</body>
</html>

