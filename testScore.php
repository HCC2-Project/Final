<?php
require_once 'header.php';
echo ' <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                        <form name="result" method="post" action="testScore.php" role="form">$error
                                          <fieldset>
                                            <h2>Please Register</h2>
                                            <hr class="colorgraph">
                                                                                
                                            <div class="form-group">
                                              <input type="integer" name="t2" id="score" value="enter score" class="form-control input-lg" placeholder="score">
                                            </div>
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                <input type="submit" name="submit" value="enter score" class="btn btn-lg btn-primary btn-block">
                                              </div>
                                              
                                            </div>
                                          </fieldset>
                                        </form>
                                      </div>
                                    </div>';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
$connection = mysql_connect("localhost", "root", "password"); // Establishing Connection with Server
$db = mysql_select_db("robinsnest", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$score = $_POST['t2'];


//Insert Query of SQL
$query = mysql_query("update members set quiz_score='$score' where user='$user'");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";


}
mysql_close($connection); // Closing Connection with Server
?>
