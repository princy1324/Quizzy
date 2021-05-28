<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style type="text/css">


            tr{
                font-size: 10px;
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
                background-color: white;
                margin-bottom: 5px;
            }
            #final_border{
                border-style: solid;
                border: 5px solid white;
                border-radius: 20px;
                background: #0a094f;
            }
            p{
                text-align: center;
                font-family: serif;
                font-weight: bold;
                font-size: large;    
                color: white;
            }


            .awesome {

                font-family: cursive;
                font-style: italic;

                width:100%;

                margin: 0 auto;
                text-align: center;

                color:#313131;
                font-size:45px;
                font-weight: bold;
                -webkit-animation:colorchange 20s infinite alternate;


            }

            @-webkit-keyframes colorchange {
                0% {

                    color: blue;
                }

                10% {

                    color: #8e44ad;
                }

                20% {

                    color: #1abc9c;
                }

                30% {

                    color: #d35400;
                }

                40% {

                    color: blue;
                }

                50% {

                    color: #34495e;
                }

                60% {

                    color: blue;
                }

                70% {

                    color: #2980b9;
                }
                80% {

                    color: #f1c40f;
                }

                90% {

                    color: #2980b9;
                }

                100% {

                    color: pink;
                }
            }
            #region {
                width: 100%;
                height: 100%;
                margin: 0px auto;
                animation: haha 5s infinite;
            }

            @keyframes haha {
                0%, 100% {
                    background: blue;
                }
                10% {
                    background: red;
                }
                40% {
                    background: purple;
                }
                70% {
                    background: orange;
                }
            }
                     
        .button {
                margin-bottom:15px;
                background-color: #fff;
                border-color: #dbdbdb;
                border-width: 1px;
                color: #363636;
                cursor: pointer;
                padding-bottom: calc(0.375em - 1px);
                padding-left: .75em;
                padding-right: .75em;
                padding-top: calc(0.375em - 1px);
                text-align: center;
                white-space: nowrap;
                display: inline-block;
                text-decoration: none;
                width:60%;
                font-size:1.8rem;
                text-transform: uppercase;
            }
            .pulse{
                animation-name: pulse;
            }
            .animated.infinite {
                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite;
            }
            .animated {
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }
            @-webkit-keyframes pulse {
                0% {
                    -webkit-transform: scale3d(1,1,1);
                    transform: scale3d(1,1,1);
                }
                50% {
                    -webkit-transform: scale3d(1.05,1.05,1.05);
                    transform: scale3d(1.05,1.05,1.05);
                }
                100% {
                    -webkit-transform: scale3d(1,1,1);
                    transform: scale3d(1,1,1);
                }
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
        $sql_receiver = "SELECT receiver FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql_name = "SELECT user_name FROM register Order BY id DESC LIMIT 1";
        $sql = "SELECT ans1 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql2 = "SELECT ans2 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql3 = "SELECT ans3 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql4 = "SELECT ans4 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql5 = "SELECT ans5 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql6 = "SELECT ans6 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql7 = "SELECT ans7 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql8 = "SELECT ans8 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql9 = "SELECT ans9 FROM receiver_ans Order BY id DESC LIMIT 1";
        $sql10 = "SELECT ans10 FROM receiver_ans Order BY id DESC LIMIT 1";

        $result_receiver = $conn->query($sql_receiver);
        $result_name1 = $conn->query($sql_name);
        $result_name2 = $conn->query($sql_name);
        $result_name3 = $conn->query($sql_name);
        $result_name4 = $conn->query($sql_name);
        $result_name5 = $conn->query($sql_name);
        $result_name6 = $conn->query($sql_name);
        $result_name7 = $conn->query($sql_name);
        $result_name8 = $conn->query($sql_name);
        $result_name9 = $conn->query($sql_name);
        $result_name10 = $conn->query($sql_name);
        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);
        $result3 = $conn->query($sql3);
        $result4 = $conn->query($sql4);
        $result5 = $conn->query($sql5);
        $result6 = $conn->query($sql6);
        $result7 = $conn->query($sql7);
        $result8 = $conn->query($sql8);
        $result9 = $conn->query($sql9);
        $result10 = $conn->query($sql10);
        ?>

        <div id="region">
            <br>
            <br>
            <center>
                <button class="btn btn-success" style="width:40%"><i class="fa fa-whatsapp" style="color: white"></i><a href="https://api.whatsapp.com/send?text=http://localhost:8080/dare4u/final.php"> Whatsapp Share</a></button>
                <br>
                <br>
                <a href="index.php" class="button animated infinite pulse" style="color:black;border:100px;font-weight:800;font-family: cursive">CREATE Your Own Quizzy!!
                </a>
                <br><br>

            </center>

            <div class="container" id="final_border">
                <?php
                while ($row = \mysqli_fetch_array($result_receiver)) {
                    ?>

                    <p class="awesome"> <?php echo "" . $row["receiver"] . "'s Answers:<br>"; ?></p>


                    <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">
                    <?php
                }
                ?>
                <?php
                while ($row = \mysqli_fetch_array($result_name1)) {
                    ?>
                    <center>  
                        <p>
                            <?php echo "1. What is your favorite nickname for " . $row["user_name"] . "?"; ?>     
                        </p>
                    </center>
                    <?php
                }
                ?>

                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <p>
                        <?php echo "Ans: " . $row["ans1"] . "<br>"; ?>    
                    </p> 

                    <?php
                }
                ?>

                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">

                <?php
                while ($row = \mysqli_fetch_array($result_name2)) {
                    ?>
                    <p>
                        <?php echo "2. What is your relation with " . $row["user_name"] . "?"; ?>    
                    </p> 
                    <?php
                }
                ?>

                <?php while ($row = mysqli_fetch_array($result2)) {
                    ?>
                    <p> 
                        <?php echo "Ans:  " . $row["ans2"] . ""; ?>    
                    </p>
                    <?php
                }
                ?>

                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">

                <?php
                while ($row = \mysqli_fetch_array($result_name3)) {
                    ?>
                    <p> 
                        <?php echo "3.What is your favorite memory with  " . $row["user_name"] . "?"; ?>    
                    </p>    
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result3)) {
                    ?>    

                    <p>
                        <?php echo "Ans:  " . $row["ans3"] . "<br>"; ?>    
                    </p>
                    <?php
                }
                ?>   
                <?php
                ?>   

                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">   
                <?php
//q4 


                while ($row = \mysqli_fetch_array($result_name4)) {
                    ?>
                    <p> 
                        <?php echo "4. If you could add one thing in " . $row["user_name"] . " what would it be? "; ?>    
                    </p>
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result4)) {
                    ?>

                    <p> 
                        <?php echo "Ans:  " . $row["ans4"] . "<br>"; ?>    
                    </p>
                    <?php
                }
                ?>   
                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">
                <?php
//q5
                while ($row = \mysqli_fetch_array($result_name5)) {
                    ?>
                    <p> 
                        <?php echo "5.Which physical feature of " . $row["user_name"] . " do you like the most?"; ?>    
                    </p>
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result5)) {
                    ?>    

                    <p>
                        <?php echo "Ans:  " . $row["ans5"] . "<br>"; ?>    
                    </p>      
                    <?php
                }
                ?>   
                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">
                <?php
//q6
                while ($row = \mysqli_fetch_array($result_name6)) {
                    ?>
                    <p>
                        <?php echo "6. According to you, what color best suits " . $row["user_name"] . "?"; ?>    
                    </p>
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result6)) {
                    ?>
                    <p>

                        <?php echo "Ans:  " . $row["ans6"] . "<br>"; ?>    
                    </p>
                    <?php
                }
                ?>   
                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">
                <?php
//q7
                while ($row = \mysqli_fetch_array($result_name7)) {
                    ?>
                    <p>
                        <?php echo "7. What special gift would you give to " . $row["user_name"] . "?"; ?>    
                    </p>
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result7)) {
                    ?>
                    <p>
                        <?php echo "Ans:  " . $row["ans7"] . "<br>"; ?>     
                    </p>
                    <?php
                }
                ?>   
                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">
                <?php
//q8
                while ($row1 = \mysqli_fetch_array($result_name8)) {
                    ?>
                    <p>
                        <?php
                        echo "8. Do you trust " . $row1["user_name"] . "?";
                        ?>    </p>
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result8)) {
                    ?>  
                    <p>
                        <?php echo "Ans:  " . $row["ans8"] . "<br>"; ?>
                    </p>
                    <?php
                }
                ?>   
                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">
                <?php
//q9
                while ($row = \mysqli_fetch_array($result_name9)) {
                    ?>
                    <p>
                        <?php echo "9. If you could change one thing about  " . $row["user_name"] . " what would it be?"; ?>
                    </p>
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result9)) {
                    ?>
                    <p>
                        <?php echo "Ans:  " . $row["ans9"] . "<br>"; ?>
                    </p>

                    <?php
                }
                ?> 
                <hr class="container" style="height:5px; width: 800px;border-width:0;background-color:white">
                <?php
//q10
                while ($row = \mysqli_fetch_array($result_name10)) {
                    ?>
                    <p>
                        <?php echo "10. Is there a secret you want to tell " . $row["user_name"] . "?"; ?>     </p>
                    <?php
                }
                ?>   
                <?php
                while ($row = mysqli_fetch_array($result10)) {
                    ?>
                    <p>    
                        <?php echo "Ans:  " . $row["ans10"] . "<br>"; ?>     
                    </p>
                    <?php
                }
                ?>

                <?php
                $conn->close();
                ?>

            </div>
        </div>

    </body>
</html>