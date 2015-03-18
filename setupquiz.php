<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  
  CreateTable ('answers', 
  'id int(11) NOT NULL AUTO_INCREMENT,
  question_id int(11) NOT NULL,
  answer varchar(255) NOT NULL,
  correct enum("0", "1") NOT NULL,
  PRIMARY KEY (id)');
  'ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13' ;


  createTable ('questions' ,
  'id int(11) NOT NULL AUTO_INCREMENT,
  question_id int(11) NOT NULL,
  question varchar(255) NOT NULL,
  type varchar(255) NOT NULL,
  PRIMARY KEY (id)'); 
  'ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4' ;


   createTable ('quiz_takers' ,
  'id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  percentage varchar(24) NOT NULL,
  date_time datetime NOT NULL,
  PRIMARY KEY (id)');
  'ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7' ;


   alterTable();
?>

    <br>...done.
  </body>
</html>
