<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
            function validation() {
                var name = document.question7.ans7.value;
                if (name == null || name == "") {
                    alert("Answer cannot be left blank!!!");
                    return false;
                }
            }
        </script>
  <style type="text/css">
    /* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #e7e7e7;
}
  nav{
                background: #0a094f;
            }
            #navbar_text{
                font-family: cursive;
                font-weight: bold;

            }
            .navbar-toggler{
                width: 47px;
                height: 34px;
                background-color: #0a094f;
                border:none;
            }
            .navbar-toggler .line{
                width: 100%;
                float: left;
                height: 2px;
                background-color: #fff;
                margin-bottom: 5px;
            }
            body{
                /*                                background: rgb(3,0,185);
                                                background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);*/
                background: wheat;
                font-family: cursive, sans-serif;
                color: #fff;
                align-items: center;
                justify-content: center;
                text-align:center;
            }
            #q7{
                background-color: #0a094f;

            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#"><img src="images/logo9.png" height="50" width="50" class="rounded-circle"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="line "></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: white; font-weight: bold;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php" style="color: white; font-weight: bold">ABout Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="color: white; font-weight: bold">contact</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php" style="color: white; font-weight: bold">FAQs</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="tnm.php" style="color: white; font-weight: bold">Terms & Conditions</a>
                    </li>   
                </ul>
            </div>  
        </nav>
        <br>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dare4u";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql_name = "SELECT user_name FROM register Order BY id DESC LIMIT 1";
        $result_name = $conn->query($sql_name);
        while ($row = \mysqli_fetch_array($result_name)) {
            ?>      


 <center>

            <?php include 'quizzy.php';
            ?>

        </center>



                <label name="q7" id="q7"style="color: #ffffff; font-size: larger">If you had 3 Wishes, What would you wish for  <?php echo "" . $row["user_name"] . ""; ?>
        <div class="container p-0 my-3 ">
            <form action="questn7_connect.php" method="POST" name="question7" id="question7" onsubmit="return validation()">
 <hr class="container" style="height:10px;border-width:0; background-color: #0a094f">
                <h3 style="color: black; font-family: cursive; font-weight: bold">7th</h3>
                <label name="q7" id="q7"style="color: #ffffff; font-size: larger">If you had 3 Wishes, What would you wish for  <?php echo "" . $row["user_name"] . ""; ?>? </label>
 <?php
        }
        ?>
  <textarea class="form-control" rows="5" id="ans7" name="ans7" placeholder="Enter your honest answer here"></textarea>
<br>
<center> <button type="submit" class="btn btn-lg" style="background-color: #0a094f; color: white">Continue</button>
            </center>
            </form>
<br>
</div>
</body>
</html>