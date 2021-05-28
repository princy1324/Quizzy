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
        $ans3 = clean_input($_POST["ans3"]);
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
        
        $stmt = $conn->prepare("INSERT INTO receiver_ans (ans3) VALUES (?)");
        $bind_param = $stmt->bind_param("s", $ans3);    
        $stmt->execute();
        $stmt->close();
        
              
        $conn->close();
       echo "<script type='text/javascript'> window.location.href='questn4.php'; </script>"; 
       
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