<html>
   <head>
      <title>Selecting Table in MySQLi Server</title>
   </head>

   <body>
      <?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'php_training';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br>';
         $sql = 'SELECT tutorial_title,tutorial_author FROM tutorials_tbl';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["tutorial_author"]. "<br>";
			   echo "Title: " . $row["tutorial_title"]. "<br><br><br><br>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>
   </body>
</html>