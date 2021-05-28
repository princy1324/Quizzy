<!--<!DOCTYPE html>
<html>
<head>
    <title>username</title>
</head>
<body>
-->

<?php
    $name = "";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$name = clean_input($_POST["name"]);
       // $q1 = clean_input($_POST["q1"]);
        $q1 = clean_input($_POST["q1"]);
        $q3 = clean_input($_POST["q3"]);
         $q4 = clean_input($_POST["q4"]);
          $q6 = clean_input($_POST["q6"]);
           $q7 = clean_input($_POST["q7"]);
            $q9 = clean_input($_POST["q9"]);
         $q10 = clean_input($_POST["q10"]);
        //$pass_word = clean_input($_POST["pass_word"]);
        //$confirm_pass= clean_input($_POST["confirm_pass"]);
        //$contact = clean_input($_POST["contact"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dare4u";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = $conn->prepare("INSERT INTO question1 (q1) VALUES (?)");
        $bind_param = $stmt->bind_param("s", $q1);    
        $stmt->execute();
        $stmt->close();
        
        $stmt3 = $conn->prepare("INSERT INTO question3 (q3) VALUES (?)");
        $bind_param = $stmt3->bind_param("s", $q3);    
        $stmt3->execute();
        $stmt3->close();
        
        $stmt4 = $conn->prepare("INSERT INTO question4 (q4) VALUES (?)");
        $bind_param4 = $stmt4->bind_param("s", $q4);    
        $stmt4->execute();
        $stmt4->close();
        
        $stmt6 = $conn->prepare("INSERT INTO question6 (q6) VALUES (?)");
        $bind_param6 = $stmt6->bind_param("s", $q6);    
        $stmt6->execute();
        $stmt6->close();
        
        $stmt7 = $conn->prepare("INSERT INTO question7 (q7) VALUES (?)");
        $bind_param7= $stmt7->bind_param("s", $q7);    
        $stmt7->execute();
        $stmt7->close();
        
        $stmt9 = $conn->prepare("INSERT INTO question9 (q9) VALUES (?)");
        $bind_param9 = $stmt9->bind_param("s", $q9);    
        $stmt9->execute();
        $stmt9->close();
        
        $stmt10 = $conn->prepare("INSERT INTO question10 (q10) VALUES (?)");
        $bind_param10 = $stmt10->bind_param("s", $q10);    
        $stmt10->execute();
        $stmt10->close();
        
        $conn->close();
       echo "<script type='text/javascript'> window.alert('Record Inserted Successfully');window.location.href='final.php'; </script>"; 
       
    }
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>


<!--</body>
</html>-->