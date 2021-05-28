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
        $ans1 = clean_input($_POST["ans1"]);
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

        //getting id of receiver
        $sql_name = "SELECT id FROM receiver_ans Order BY id DESC LIMIT 1";
        $result_name = $conn->query($sql_name);
        while ($row = \mysqli_fetch_array($result_name)) {

            $_SESSION['r_ide'] =  $row['id'] ;
            $ride = $_SESSION['r_ide'];
        
        $stmt = $conn->prepare("INSERT INTO receiver_ans (ans1) VALUES (?) WHERE id= '$ride' ");
        }
        $bind_param = $stmt->bind_param("s", $ans1);    
        $stmt->execute();
        $stmt->close();
        $conn->close();
       
           
              echo "<script type='text/javascript'> window.location.href='questn2.php'; </script>"; 
           
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