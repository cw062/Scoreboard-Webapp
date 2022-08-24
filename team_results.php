<html>
<head></head>
<body style="background-color:Ivory;">
<h3>VIEW TEAM RESULTS</h3>

      <form action="team_results.php" method="post">
        name: <input type="text" name="name"><br>
	<input name="submit" type="submit" value="See Results">
	</form>
	<br></br>
	<a href="http://www.csce.uark.edu/~cw062/home_page.html">HOME PAGE<a>
<?php
   include("php_db.php"); // include database class

   // replace ' ' with '\ ' in the strings so they are treated as single command line a
    $name = $_POST[name];
    
        if (isset($_POST['submit']))
        {
          $myDb = new php_db('cw062','eeSoh7Ai','cw062'); // create a new object, class php_db(), replace MYUSERNAME and MYSQLPASSWORD with your MySQL username and password
      //initialize database
      $myDb->initDatabase();
      // show Items data before inserting a record
      $Teams = $myDb->query("SELECT teamId, name, t1Id, score1, t2Id, score2 FROM TEAM, RESULT WHERE TEAM.name = '".$name."' AND TEAM.teamId = RESULT.t1Id");  // we show data befor and after the insert
      $myDb->printTable($Teams);
        }
?>
</body>
</html>
