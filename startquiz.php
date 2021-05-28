<?php
session_start();      

$servername = "sql313.epizy.com";
        $username = "epiz_26656819";
        $password = "oEl0mgrZKsu61O";
        $dbname = "epiz_26656819_quizzy2021";



// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql_name = "SELECT reg_id FROM ide Order BY id DESC LIMIT 1";
        $result_name = $conn->query($sql_name);
        while ($row = \mysqli_fetch_array($result_name)) {

            $_SESSION['rride'] =  $row['reg_id'] ;
             echo "<script type='text/javascript'> window.location.href='questn1.php'; </script>"; 
            
            
        }
            
            ?>