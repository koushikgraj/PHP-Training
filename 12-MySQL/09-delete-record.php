<html>
   <head>
      <title>Deleting MySQL Table record</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'root@123';
         $dbname = 'TUTORIALS';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
		 
         if ($mysqli->query('DELETE FROM tutorials_tbl where tutorial_id = 4')) {
            printf("Table tutorials_tbl record deleted successfully.<br />");
         }
         if ($mysqli->errno) {
            printf("Could not delete record from table: %s<br />", $mysqli->error);
         }
   
         $sql = "SELECT tutorial_id, tutorial_title, tutorial_author, submission_date FROM tutorials_tbl";
		 
         $result = $mysqli->query($sql);
           
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               printf("Id: %s, Title: %s, Author: %s, Date: %d <br />", 
                  $row["tutorial_id"], 
                  $row["tutorial_title"], 
                  $row["tutorial_author"],
                  $row["submission_date"]);               
            }
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
         $mysqli->close();
      ?>
   </body>
</html>