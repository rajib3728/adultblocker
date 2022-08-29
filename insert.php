
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
<?php
$conn = mysqli_connect("localhost", "root","", "ab");
         
         // Check connection
         if($conn === false){
             die("ERROR: Could not connect. "
                 . mysqli_connect_error());
         }
          
         // Taking all 5 values from the form data(input)
         $link =  $_REQUEST['link'];
        
          
         // Performing insert query execution
         // here our table name is college
         $sql = "INSERT INTO ab VALUES ('$link')";
          
         if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$link");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
          
         // Close connection
         mysqli_close($conn);
         ?>
         </center>
</body>
 
</html>