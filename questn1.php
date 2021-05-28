<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Quizzy 1st</title>
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="196 x 196">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function validation() {
                var name = document.question1.ans1.value;
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
            #q1{
                background-color: #0a094f;

            }
            ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                color: pink;
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
            #abc {
                /*                                background: rgb(3,0,185);
                                                background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);*/
                background: wheat;
                font-family: cursive, sans-serif;
                color: #fff;
                align-items: center;
                justify-content: center;
                text-align:center;
            }

            #footer{
                background: rgb(131,58,180);
                background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(69,137,252,0.865983893557423) 0%, rgba(251,29,253,1) 100%);
                font-family: sans-serif;
                color: white;
            }


        </style>
    </head>
    <body id="abc">
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#"><img src="images/logo.png" height="50" width="50" class="rounded-circle"></a>
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
        $servername = "sql313.epizy.com";
        $username = "epiz_26656819";
        $password = "oEl0mgrZKsu61O";
        $dbname = "epiz_26656819_quizzy2021";



// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }        
        //getting id from startquiz
        $cpide = $_SESSION['rride'];

        $sql_name1 = "SELECT * FROM register  WHERE id= '$cpide'";
        $result_name1 = $conn->query($sql_name1);
        
        while ($row = \mysqli_fetch_array($result_name1)) {
            ?>      

        <center>
            <?php
            include 'quizzy.php';



            //  if ($_SESSION['cpide'] && $row["id"]) {
            // if($_SESSION['ide']==$row['id']){
            ?>
        </center>
        <div class="container p-0 my-3">
            <form action="questn1_connect.php" method="POST" name="question1" id="question1" onsubmit="return validation()">
                <hr class="container" style="height:10px; width: 930px;border-width:0;color: red;background-color: #0a094f">
                <h3 style="color: black; font-family: cursive; font-weight: bold">1st</h3>

                <label type="text" name="q1" id="q1" class="form-control" style="color: #ffffff; font-size: larger">A Nickname for <?php echo " " . $row["user_name"] . "?"; ?> </label>
                
            <textarea class="form-control" rows="5"  name="ans1" id="ans1" placeholder="Enter your honest answer here"></textarea>
            <br>
            <center>
                <button type="submit" class="btn btn-lg" style="background-color: #0a094f; color: white">Continue</button>

            </center>
            <br>
        </form>
        <br>
        <img src="images/fri1.png" style="height:50%; width:50%">
        <br>
        <br>
        <?php
            }
            
            ?>
        <p style="color: black"> ♪ ♪ What's up, beautiful people?  And in this video, I'mgoing to break it down for you on how to create and makeyour own website for beginners. I am working with Wix. This video is apaid collaboration. And I'm going to show youhow to create your own website. I created twowebsites using this service, so I'm going to showyou how I did my company -- this is my office. I'm gonna show you how I didthe office website using Wix. So let's just dive in to theback end of Wix now, shall we? Welcome to my desktop. I cleaned my roombefore you guys came over. It was such a hot mess. When I say room, I'mreferring to my computer. OMGStrength.LA.He's a personal trainer. And I found it challenging,so I do highly recommend before starting your website thatyou know what you're creating. Over here is a document of whatI intend to write on the site. So I have that documentall prepped up with the words. This is actually all the copy that I'm going tohave on the site. And then I also have aPinterest board on inspiration, and I love Pinterest. I actually just do thismainly for internal use. I have a bunch of secret boards, and these are myimages that inspire me, whether it's color, whetherit's texture, graphic design. So I pin things that I like. Now, this is visual inspiration. In terms of an actual website,I also do a lot of digging. I will be showing you how I edit myproduction company's website. I looked up a bunch ofother production companies, and PORTAL A had a good one,and Tiny Horse had a good one. I mean, they were just kind ofstraightforward, which I liked. This is Tiny Horse. And these are productioncompanies I've worked with. PORTAL A. What I love aboutPORTAL A's production company is the video thatloads right away. It tells the viewer, you areon a production company site, and this is what we do. This isa sample of what we've created. And what I like about TinyHorse is, it's a one-pager. It just scrolls. So I'm going tocombine these two as my point ofreference and inspiration, as well as my visual inspirationon colors here on Pinterest onto my Wix site. I do suggest youdo that beforehand. It will save you alot of time and headache. Let's start hereon the dashboard. Create a new site. Here we arelooking at templates, and depending onwhat kind of business or craft you'retrying to promote, there are so many categories. Photography -- I know I've got a lot ofphotographers out there. Resumés. Oh mygoodness, resumé? Really? Actor's resumé,business CV. This is amazing. And you can alsorepurpose sites. This one, Ibelieve, is the template that we used for the site. So this is what itlooked like first. It has thisbanner here at the top, "Co-Working,"yada, yada, yada. I don't have a co-working space, but I do likethe layout of this. All you got to do is click on whatever it isthat you want to change. For now, let's clickthis background strip. I'm gonna put a video there, because I'm a videoproduction company. So let's go with thisone. Change background. And we can play it to seewhat that's really about. And we can pause. I want to delete this, and I'm gonna delete that. And I'm going to move this. Because I want to find outmore about the company here. Let me change this text first. And here's whereyou can put the name of whatever it isyou're trying to promote. I really likethis font, LuLu Clean. Yeah, she's so clean. And you can stretch it out. I'm gonna go ahead andtype, "House of Shameless." And then I can move it. And I also believe I wannachange the text color to black, which you can'tsee because of this. And I want to changethe header to white. Now I've got my text here.That got lost in the shuffle. So I'm gonna go ahead andchange that custom design and the text and the color. And I notice when it loaded,it turned a burgundy color, so I'm going to go overto "Hover" or "Clicked" and make surethose colors are cool. Those are some cool colors. Now I'm gonna go aheadand also change this here. Maybe I can add an image. Or I can change the color. When it comes toediting, it really is a bunch of fiddling. Itis such a fiddle-fiddle. Ahh, that makes meso calm right now. I can also change this. And this little paintbrushis the design, custom design, and I'm going tochange that color to black. I'm also gonna change the font. Again, you guys, Iactually encourage you to not do all of this mess. Find a templatethat fits your needs, and it's just plug and play. But I'm gonna show you howeasy it is to customize things. "About Us." Again, I'mgoing to change the font. They have all thesedifferent options for font. And here, "About Us." Ihave my thing over here that I can just copy and paste. Bam. And I can justhit this "Zoom Out." Ahhh. Ooh. And I'm noticinghere that I don't like where that is positioned.I'm gonna pull it down here. And look at that line. It showsme that it's center of that, which is also very helpful. Zoom out to the bigger picture. I'll change this. Copy. Paste. I actually don't needthis gallery, so I deleted it. Instead, I will add an image. Here's where we add images. I'm gonna go toimage, "My Images," and I'm going to add thispretty little thang right here. This is anexample of our audience. Then I can even addtext, which is what I'll do. Perfect. Here. Bam. I'm e -- actually, let's go aheadand 
        </p>

    </div>
    <footer id="footer">
        <hr>

        <center>
            <p>Disclaimer: All content is provided for fun and entertainment purpose only</p>  
            <p>© 2020 Secretdiary All rights Reserved</p>
        </center> 
    </footer>





</body>
</html>