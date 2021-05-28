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
        $user_name = clean_input($_POST["user_name"]);
        //$email = clean_input($_POST["email"]);
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
        
        $stmt = $conn->prepare("INSERT INTO register (user_name) VALUES (?)");
        $stmt->bind_param("s", $user_name);
        
        $stmt->execute();
        $stmt->close();
        $conn->close();
       echo "<script type='text/javascript'>window.location.href='copylink.php'; </script>"; 
       
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