<!--<!DOCTYPE html>
<html>
<head>
    <title>username</title>
</head>
<body>
-->
<?php
 session_start();
?>

<?php
    $name = "";
    $received = NULL;
    
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$name = clean_input($_POST["name"]);
       // $q1 = clean_input($_POST["q1"]);
        $ans2 = clean_input($_POST["ans2"]);
        //$pass_word = clean_input($_POST["pass_word"]);
        //$confirm_pass= clean_input($_POST["confirm_pass"]);
        //$contact = clean_input($_POST["contact"]);
        
      $servername = "sql313.epizy.com";
        $username = "epiz_26656819";
        $password = "oEl0mgrZKsu61O";
        $dbname = "epiz_26656819_quizzy2021";

        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

         $ride = $_SESSION['r_ide'];
        
        $stmt = $conn->prepare("INSERT INTO receiver_ans (ans2) VALUES (?)");
        echo "$stmt";
        $bind_param = $stmt->bind_param("s", $ans2);    
        $stmt->execute();
        $stmt->close();
        
              
        $conn->close();
    //    $id= 15; $name="welcome & to & quizzy";
       echo "<script type='text/javascript'> window.location.href='questn3.php'; </script>"; 
       
    
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