<?php//quiz score

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//https://youtu.be/DoTGt9CnC5Y code source
//connect to the databse
mysql_connect("localhost", "root", "password")or die("connection fail");
mysql_select_db("result")or die("connection fail");
$name = $-POST['username'];
$query ="select* from results where username = --";
$results = mysql-query($query);
while($line = mysql_fetch_array($results, MYSQL_ASSOC)){
    echo "$line['username']."<br/>;
        
}

?>