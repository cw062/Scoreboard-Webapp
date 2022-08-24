<html>
<head></head>
<body style="background-color:Ivory;">
<h3>ADD GAME TO THE DATABASE</h3>

      <form action="add_game.php" method="post">
        rank1: <input type="number" name="rank1"><br>
        rank2: <input type="number" name="rank2"><br>
         location: <input type="text" name="location"><br>
	date: <input type="date" name="date"><br>
         <input name="submit" type="submit" >
      </form>
      <br><br>
	<a href="http://www.csce.uark.edu/~cw062/home_page.html">HOME PAGE<a>

<?php
   include("php_db.php"); // include database class

   // replace ' ' with '\ ' in the strings so they are treated as single command line a
    $rank1 = $_POST[rank1];
    $rank2 = $_POST[rank2];
    $location = $_POST[location];
    $date = $_POST[date];
        if (isset($_POST['submit']))
        {
          $myDb = new php_db('cw062','eeSoh7Ai','cw062'); // create a new object, class php_db(), replace MYUSERNAME and MYSQLPASSWORD with your MySQL username and password
      //initialize database
      $myDb->initDatabase();
      // show Items data before inserting a record
      $Games = $myDb->query('SELECT * FROM GAME');  // we show data befor and after the insert
      echo '<br>Table GAME  before:';
      $myDb->printTable($Games);
      $gameId = '0';
      $values = ' \'' . $gameId . '\', \'' . $rank1 . '\', \'' . $rank2 . '\', \''. $location . '\', \'' . $date . '\' ';
      $myDb->insert('GAME', $values);

      // show Item data after inserting a record
      $Games = $myDb->query('SELECT * from GAME'); // select ALL from Restaurant - After the insert
          echo '<br>Table GAME after:';
          $myDb->printTable($Games);

        }
?>
</body>
</html>
