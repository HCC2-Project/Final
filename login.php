<?php // 
/*
     * @author Robin Nixon
     * @Date 10/03/2015
       @Source http://lpmj.net/4thedition/ 
     * 
     */
  require_once 'header.php';  
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
        $error = "Not all fields were entered<br>";
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "<span class='error'>Username/Password
                  invalid</span><br><br>";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("You are now logged in. Please <a href='members.php?view=$user'>" .
            "click here</a> to continue.<br><br>");
      }
    }
  }

  echo <<<_END
     <div class="container marketing">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form name="form_login" method="post" action="login.php" role="form">$error
                <fieldset><h2>Please Sign In</h2>
         <br/>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input name="user" type="text" id="user" value="$user" class="form-control input-lg" placeholder="User Name" required autofocus>
                    </div>

                    <div class="form-group">
                        <input type="password" name="pass" id="pass" value="$pass" class="form-control input-lg" placeholder="Password" required>
                    </div>
                    <span class="button-checkbox">
                        <button type="button" class="btn" data-color="info">Remember Me</button><!-- Additional Option -->
                            <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                        <hr class="colorgraph">
                    </span>
                    <div class="row">         
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">
                        </div> 
                        <div class="col-xs-6 col-sm-6 col-md-6"> 
                            <a href="signup.php"  class="btn btn-lg btn-primary btn-block">Sign Up</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
      </div>
        <hr class="featurette-divider">
    
            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
                </div>';
    
_END;
?>
  
  </body>
</html>
