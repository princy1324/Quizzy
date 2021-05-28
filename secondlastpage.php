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
    function validation(){  
var name = document.register.user_name.value;
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
}  
  </script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
  <a class="navbar-brand" href="#">Dare4u</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABout Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="#">FAQs</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">Terms and COnditions</a>
      </li>   
    </ul>
  </div>  
</nav>
<br>

<div class="container">
  <center>
    <h3>
      Dare4u
    </h3>
  </center>
</div>
<div class="container">
<hr style="height:5px;border-width:0;color:gray;background-color:gray">
<br>
<br>

</div>
<br>
<br>
      <div class="container">
          <center> 
              <form action="final.php" method="POST" name="register" id="register" onsubmit="return validation()">
                <button>View</button>           
          <br>
          </form>
         
             <button type="submit"  class="btn btn-outline-danger btn-lg" style="max-width:20%"><a href="whatsapp://send?text=index.php" data-action="share/whatsapp/share">Share via Whatsapp</a>
                 </button>
         
      </center> 
      </div>
      <br>
      <br>
      <br>
<br>
      <br>
      <br>
<br>
      <br>
      <br>
<footer>
<hr>
  <div class="container">
    <center>
        <p>Disclaimer: All content is provided for fun and entertainment purpose only</p>  
        <p>© 2020 Secretdiary All rights Reserved </p>
    </center>    
    </div>
</footer>
</body>
</html>


