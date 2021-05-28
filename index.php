
<html lang="en">

    <head>
        <title>Create Your Slam Book</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Create Your Slam Book and Find out what your Friends Think About me">
        <meta property="og:title" content="Create Your Slam Book" />
        <meta name="theme-color" content="#201dcd"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta property="og:image" content="http://magicscript.ultimatefreehost.in/slambook/slam-book/main.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Dosis");
            body {
                /*                background: rgb(3,0,185);
                                background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);*/
                background: window;
                font-family: cursive, sans-serif;
                color: #fff;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                text-align:center;
            }
            #Wrapper {
                background-color: wheat;
                width: 80%;
                text-align:center;
                align-items: center;
                margin: 0 auto;
                margin-top:5vh;
                border-style: solid;
                border: 5px solid black;
                border-radius: 10px;
                padding-top: 10px;
                padding-right: 30px;
                padding-bottom: 10px;
                padding-left: 30px;
            }
            .Title {

                padding: 0;

                font-size: 8vw;
                font-weight: bold;
                text-shadow: 0.9rem 0.7rem 0.2rem #4527a0;
            }
            .button {
                margin-bottom:15px;
                background-color: #fff;
                border-color: #dbdbdb;
                border-width: 1px;
                color: #363636;
                cursor: pointer;
                justify-content: center;
                padding-bottom: calc(0.375em - 1px);
                padding-left: .75em;
                padding-right: .75em;
                padding-top: calc(0.375em - 1px);
                text-align: center;
                white-space: nowrap;
                display: inline-block;
                text-decoration: none;
                width:60%;
                font-size:1.2rem;
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
            .Input {
                position: relative;
            }
            .Input-text {
                text-align:center;
                padding:0.5rem;
                display: block;
                margin: 0;;
                color: black;
                width: 90%;
                font-family: inherit;
                font-size: 1.2rem;
                font-weight: inherit;
                line-height: 1;
                border: none;
                border-radius: 0.1rem;
                -webkit-transition: box-shadow 300ms;
                transition: box-shadow 300ms;
            }
            .Input-text::-webkit-input-placeholder {
                color: #B0BEC5;
            }
            .question{
                background: rgba(0,0,0,0.31);
                padding: 20px;
                border-radius:10px;
                margin:8px;
            }
            .question>img{
                width: 78px;
                height: 78px;

                border-radius: 4px;
                background:white;
                padding:5px;
            }
            .question>h2{
                font-size: 1.14rem;
                margin: 4px;
            }
            .fab {
                width: 76px;
                height: 76px;
                background-color: red;
                border-radius: 50%;
                box-shadow: 0 6px 10px 0 #666;
                transition: all 0.1s ease-in-out;
                opacity:0.7; 
                font-size: 19px;
                color: white;
                text-align: center;
                line-height: 26px;
                position: fixed;
                left: calc(50% - 38px);
                bottom: 50px;
            }
            .fab:hover {
                box-shadow: 0 6px 14px 0 #666;
                transform: scale(1.05);
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
    <center>
        <br>
        
        <div class="container" id="wrapper">
            <center>
                <h1 style="font-size: 5vw;
                    text-shadow: -0.1rem 0.1rem 0.2rem  orange; color: #363636;" class="animated infinite pulse">What Your Friends Think About You?</h1>
                <img src="images/image2.png" style="width: 30vw;">
                <h2 style="font-size: 1.5rem;
                    text-shadow: -0.1rem 0.1rem 0.2rem  yellow; color: black;" class="animated infinite pulse">Create Your <span style="color:black">Slam Book</span></h2>
                <h3 style="font-size: 1.3rem;
                    text-shadow:-0.1rem 0.1rem 0.2rem  white;color:black">Your Friends Will Give Answers Of <br> Intersting Questions About You</h3>

                <a href="name.php" class="button  animated infinite pulse" style="color:black;border:100px;font-weight:800;font-family: cursive">CREATE NOW!!
                </a>

            </center>
        </div>


    </center>
</body>

</html>