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
            <h2>Privacy Policy for Quizzy</h2>
            <p>At Quizzy, accessible from quizzy2021.online, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Quizzy and how we use it.</p>
            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to Contact through email at <b>Quizzy2021@gmail.com</b></p>
            <h2>Log Files</h2>
            <p>Quizzy follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
            <h2>Cookies and Web Beacons</h2>
            <p>Like any other website, Quizzy uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
            <h2>Google DoubleClick DART Cookie</h2>
            <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
            <h2>Privacy Policies</h2>
            <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Quizzy. Our Privacy Policy was created with the help of the <a href="https://webbeast.in">GDPR Privacy Policy Generator</a></p>
            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Quizzy, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
            <p>Note that Quizzy has no access to or control over these cookies that are used by third-party advertisers.</p>
            <h2>Third Pary Privacy Policies</h2>
            <p>Quizzy's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>
            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>
            <h2>Children's Information</h2>
            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
            <p>Quizzy does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to Contact immediately and we will do our best efforts to promptly remove such information from our records.</p>
            <h2>Online Privacy Policy Only</h2>
            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Quizzy. This policy is not applicable to any information collected offline or via channels other than this website.</p>
            <h2>Consent</h2>
            <p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>

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


