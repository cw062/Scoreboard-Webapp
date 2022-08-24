<html>
<head></head>
<body style="background-color:Ivory;">
<h3>ADD RESULT TO THE DATABASE</h3>

      <form action="add_result.php" method="post">
        t1Id: <input type="number" name="t1Id"><br>
        t2Id: <input type="number" name="t2Id"><br>
         score1: <input type="number" name="score1"><br>
        score2: <input type="number" name="score2"><br>
        gameId: <input type="number" name="gameId"><br>
         <input name="submit" type="submit" >
      </form>
      <br><br>
        <a href="http://www.csce.uark.edu/~cw062/home_page.html">HOME PAGE<a>

<?php
   include("php_db.php"); // include database class

   // replace ' ' with '\ ' in the strings so they are treated as single command line a
    $t1Id = $_POST[t1Id];
    $t2Id = $_POST[t2Id];
    $score1 = $_POST[score1];
    $score2 = $_POST[score2];
    $gameId = $_POST[gameId];
        if (isset($_POST['submit']))
        {
          $myDb = new php_db('cw062','eeSoh7Ai','cw062'); // create a new object, class php_db(), replace MYUSERNAME and MYSQLPASSWORD with your MySQL username and password
      //initialize database
      $myDb->initDatabase();
      // show Items data before inserting a record
      $Games = $myDb->query('SELECT * FROM RESULT');  // we show data befor and after the insert
      echo '<br>Table RESULT  before:';
      $myDb->printTable($Games);
      $values = ' \'' . $gameId . '\', \'' . $t1Id . '\', \'' . $t2Id . '\', \''. $score1 . '\', \'' . $score2 . '\' ';
      $myDb->insert('RESULT', $values);

      // show Item data after inserting a record
      $Games = $myDb->query('SELECT * from RESULT'); // select ALL from Restaurant - After the insert
          echo '<br>Table RESULT after:';
          $myDb->printTable($Games);

        }
?>
</body>
</html>
