<html>
<head></head>
<body style="background-color:Ivory;">
<h3>
ADD TEAM TO THE DATABASE</h3>

      <form action="add_team.php" method="post">
         Name: <input type="text" name="name"><br>
         Nickname: <input type="text" name="nickname"><br>
         Rank: <input type="number" name="rank"><br>
         <input name="submit" type="submit" >
      </form>
      <br><br>
	<a href="http://www.csce.uark.edu/~cw062/home_page.html">HOME PAGE<a>

<?php
   include("php_db.php"); // include database class

   // replace ' ' with '\ ' in the strings so they are treated as single command line a
    $name = $_POST[name];
    $nickname = $_POST[nickname];
    $rank = $_POST[rank];
    echo $nickname;
        if (isset($_POST['submit']))
        {
          $myDb = new php_db('cw062','eeSoh7Ai','cw062'); // create a new object, class php_db(), replace MYUSERNAME and MYSQLPASSWORD with your MySQL username and password
      //initialize database
      $myDb->initDatabase();
      // show Items data before inserting a record
      $Teams = $myDb->query('SELECT * FROM TEAM');  // we show data befor and after the insert
      echo '<br>Table TEAM before:';
      $myDb->printTable($Teams);
      $teamId = '0';
      $values = ' \'' . $teamId . '\', \'' . $name . '\', \'' . $nickname . '\', \''. $rank . '\' ';
      $myDb->insert('TEAM', $values);

      // show Item data after inserting a record
      $Teams = $myDb->query('SELECT * from TEAM'); // select ALL from Restaurant - After the insert
          echo '<br>Table Team after:';
          $myDb->printTable($Teams);

        }
?>
</body>
</html>
