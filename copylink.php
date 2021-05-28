
<?php
 session_start();
?>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript">
            function validation() {
                var name = document.register.user_name.value;
                if (name == null || name == "") {
                    alert("Name can't be blank");
                    return false;
                }
            }
        </script>
        <style>
            body {
                /*                background: rgb(3,0,185);
                                background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);*/
                background: wheat;
                font-family: "Dosis", sans-serif;
                color: #fff;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                text-align:center;
            }
            #wrapper2{
                border-style: solid;
                border: 2px solid black;
                border-radius: 10px;
                padding-top: 10px;
                padding-right: 30px;
                padding-bottom: 10px;
                padding-left: 30px;
            }
            #heading{
                color: yellow;
                font-family: cursive;
                font-size: 50px;
                font-style: italic;
            }

            #start{
                text-height: 20%;

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
                        <a class="nav-link" href="aboutus.php" style="color: white; font-weight: bold">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="color: white; font-weight: bold">Contact</a>
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
        <?php include 'quizzy.php';
        ?>
        <div class="container" id="wrapper2">
            <center>
                <?php 
                 
                  $cpide =  uniqid();
   $_SESSION['cpide'] = "$cpide";
   echo $_SESSION['ide'];
       
      
            ?>     
      
                
                <input type="text" class="form-control center " value="http://localhost:8080/dare4u/receiver_name.php?/<?php echo $ide ?>" id="GfGInput"><br> 
                <button onclick="GeeksForGeeks()" class="btn btn-primary btn-block">Copy Link</button> 
                <script>
                    function GeeksForGeeks() {
                        var copyGfGText = document.getElementById("GfGInput");
                        copyGfGText.select();
                        document.execCommand("copy");
                        alert("Copied the text: " + copyGfGText.value);
                    }
                </script> 
                <br>

                <button class="btn btn-success btn-block"><i class="fa fa-whatsapp" style="color: white"></i><a href="https://api.whatsapp.com/send?text=http://localhost:8080/dare4u/receiver_name.php?id={$row['id']}"> Whatsapp Share</a></button>
            
           
            </center>
        </div>
        <br><br><br><br><br><br><br>
    </body>
</html>









































