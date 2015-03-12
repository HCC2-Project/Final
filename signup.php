<?php // Example 26-5: signup.php
  require_once 'header.php';

  echo <<<_END
  <script>
    function checkUser(user)
    {
      if (user.value == '')
      {
        O('info').innerHTML = ''
        return
      }

      params  = "user=" + user.value
      request = new ajaxRequest()
      request.open("POST", "checkuser.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
          if (this.status == 200)
            if (this.responseText != null)
              O('info').innerHTML = this.responseText
      }
      request.send(params)
    }

    function ajaxRequest()
    {
      try { var request = new XMLHttpRequest() }
      catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
          try { request = new ActiveXObject("Microsoft.XMLHTTP") }
          catch(e3) {
            request = false
      } } }
      return request
    }
  </script>
  <div class='main'><h3>Please enter your details to sign up</h3>
_END;

  $error = $user = $pass = "";
  if (isset($_SESSION['user'])) destroySession();

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = "Not all fields were entered<br><br>";
    else
    {
      $result = queryMysql("SELECT * FROM members WHERE user='$user'");

      if ($result->num_rows)
        $error = "That username already exists<br><br>";
      else
      {
        queryMysql("INSERT INTO members VALUES('$user', '$pass')");
        die("<h4>Account created</h4>Please Log in.<br><br>");
      }
    }
  }

  echo <<<_END
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                        <form name="signup" method="post" action="signup.php" role="form">$error
                                          <fieldset>
                                            <h2>Please Register</h2>
                                            <hr class="colorgraph">
                                            <div class="form-group">
                                              <input name="user" type="text" id="user" value"$user" class="form-control input-lg" placeholder="User Name">
                                            </div>                                            
                                            <div class="form-group">
                                              <input type="password" name="pass" id="pass" value="$pass" class="form-control input-lg" placeholder="Password">
                                            </div>
                                            
                                            <span class="button-checkbox">
                                            <button type="button" class="btn" data-color="info">Remember Me</button><!-- Additional Option -->
                                            <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                                            <hr class="colorgraph">
                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                <a href="login.php" target="_blank" class="btn btn-lg btn-success btn-block">Back To Login</a> </div>
                                              
                                                 
                                            
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                <input type="submit" name="submit" value="Sign Up" class="btn btn-lg btn-primary btn-block">
                                              </div>
                                              
                                            </div>
                                          </fieldset>
                                        </form>
                                      </div>
                                    </div>
    <form method='post' action='signup.php'>$error
    <span class='fieldname'>Username</span>
    <input type='text' maxlength='16' name='user' value='$user'
      onBlur='checkUser(this)'><span id='info'></span><br>
    <span class='fieldname'>Password</span>
    <input type='text' maxlength='16' name='pass'
      value='$pass'><br>
_END;
?>

    <span class='fieldname'>&nbsp;</span>
    <input type='submit' value='Sign up'>
    </form></div><br>
  </body>
</html>
