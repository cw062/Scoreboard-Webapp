<html>
<body>
<h2>All GAMES<h2>
<br></br>

<?php
   include("php_db.php");
          $myDb = new php_db('cw062','eeSoh7Ai','cw062'); // create a new object, class php_db(), replace MYUSERNAME and MYSQLPASSWORD with your MySQL username and password
      //initialize database
      $myDb->initDatabase();
      // show Items data before inserting a record
      $Teams = $myDb->query('SELECT * FROM GAME');
          $myDb->printTable($Teams);


?>
<h3>
<a href="http://www.csce.uark.edu/~cw062/home_page.html">HOME PAGE<a>
</h3>
</body>
</html>
