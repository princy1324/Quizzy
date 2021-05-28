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
                var name = document.register.user_name.value;
                if (name == null || name == "") {
                    alert("Name can't be blank");
                    return false;
                }
            }
        </script>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Dosis");

            #abc {
                /*                                background: rgb(3,0,185);
                                                background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);*/
                background: wheat;
                font-family: cursive, sans-serif;
                color: black;
                align-items: center;
                justify-content: center;
                text-align:center;
            }

            #heading{
                color: black;
                font-family: cursive;
                font-size: 45px;
                font-style: italic;
            }
            #footer{
                background: brown;
                font-family: sans-serif;
            }
            #start{
                text-height: 50%;

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
    <body id="abc">
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
        <br>

        <div class="container" id="abc">
            <center>
                <?php include 'quizzy.php';
                ?>
            </center>
        </div>
        <!--        <div class="container">
                    <hr style="height:5px;border-width:0;color:gray;background-color:gray">
                    <br>
                    <br>
                    
                </div>-->
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any query regrading Site, Advertisement and any other issue, please feel free to contact at <strong>Quizzy2021@gmail.com</strong></p>


        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </body>
</html>


