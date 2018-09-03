<?php
$mysqli = new mysqli("some-mysql", "root", "my-secret-pw");
$sql = "CREATE DATABASE `COUNTER` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
#echo $mysqli->server_info;
#echo $mysqli->server_version;

// Performs the $sql query on the server to create the database
if ($mysqli->query($sql) === TRUE) {
 echo 'Database "COUNTER" successfully created';
}
else {
 echo 'Error: '. $mysqli->error;
}

#$sql = "SHOW databases";


#$sql = "SHOW DATABASES";
#$result = $mysqli->query($sql);
#if ($result === false) {
#    throw new Exception("Could not execute query: " . $mysqli->error);
#}

#$db_names = array();
#while($row = $result->fetch_array(MYSQLI_NUM)) { // for each row of the resultset
#    $db_names[] = $row[0]; // Add db name to $db_names array
#}

#echo "Database names: " . PHP_EOL . print_r($db_names, TRUE); // display array

mysqli_select_db( $mysqli, 'COUNTER' );

         $sql = "create table counter_table(id INT AUTO_INCREMENT,counter INT NOT NULL,primary key (id))";  
         
         if(mysqli_query($mysqli, $sql)){  
         echo "Table created successfully";  
         } else {  
            echo "Table is not created successfully ";  
         }



   $sql = "UPDATE counter_table SET counter=counter+1";
   
   if (mysqli_query($mysqli, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($mysqli);
   }

$sql = "SELECT counter FROM counter_table";
$result = mysqli_query($mysqli,$sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["counter"];
            echo "$visits"; 
        }
    } else {
        echo "No initial value for counter set";
        $sql = "INSERT counter_table SET counter=counter+1";
        if (mysqli_query($mysqli, $sql)) {
           echo "Initial value for counter set";
        } else {
           echo "Error setting initial value for counter: " . mysqli_error($mysqli);
        }
    }
?>

