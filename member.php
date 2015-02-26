<!DOCTYPE html>
<html>
    <head>
        <title>
            
        </title>
    </head>
    <body> 
<?php 
        $user = $_GET['user_id']; 
        session_start(); 

        $_SESSION['user_id'] = $user; 

        if(isset($_SESSION['user_id'])){ 
            } else { 
                echo " 
                <script language='javascript'> 
                alert('Sorry, but you must login to view the members area!') 
                </script> 
                <script> 
                window.location='http://mysite.com/login.html' 
                </script> 
                "; } 
                    echo "Welcome, $user"; 
?> 
    </body>
</html>