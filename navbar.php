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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <script>
            function validation() {
                var name = document.register.user_name.value;
                if (name == null || name == "") {
                    alert("Name can't be blank");
                    return false;
                }
            }
        </script>
        <style>
            nav{
                background: #C0C0C0;
            }
            #navbar_text{
                font-family: cursive;
                font-weight: bold;

            }
            .navbar-toggler{
                width: 47px;
                height: 34px;
                background-color: #7eb444;
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
            <a class="navbar-brand" href="#"><img src="images/logo9.png" width="75" height="50" alt="slambook" class="rounded-circle"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                <ul class="navbar-nav" id="navbar_text">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: black">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black">Contact</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black">FAQs</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black">Terms & Conditions</a>
                    </li>   
                </ul>
            </div>  
        </nav>
        <br>


    </body>
</html>


