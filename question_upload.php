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


<div class="container">
  <center>
    <h3>
      Dare4u
    </h3>
  </center>
</div>

<br>
<br>
      <div class="container">
          <center> 
              <form action="question_connect.php" method="POST" name="register" id="register" onsubmit="return validation()">
              <input type="text" class="form-control" name="q1"  id="q1" ng-model="user_name" placeholder="type quetions" maxlength="25" data-minlength="1" width="100%">
              <input type="text" class="form-control" name="q3"  id="q3" ng-model="user_name" placeholder="type quetions" maxlength="25" data-minlength="1" width="100%">
              <input type="text" class="form-control" name="q4"  id="q4" ng-model="user_name" placeholder="type quetions" maxlength="25" data-minlength="1" width="100%">
              <input type="text" class="form-control" name="q6"  id="q6" ng-model="user_name" placeholder="type quetions" maxlength="25" data-minlength="1" width="100%">
              <input type="text" class="form-control" name="q7"  id="q7" ng-model="user_name" placeholder="type quetions" maxlength="25" data-minlength="1" width="100%">
              <input type="text" class="form-control" name="q9"  id="q9" ng-model="user_name" placeholder="type quetions" maxlength="25" data-minlength="1" width="100%">
              <input type="text" class="form-control" name="q10"  id="q10" ng-model="user_name" placeholder="type quetions" maxlength="25" data-minlength="1" width="100%">    
              <br>
          
          <button type="submit"  class="btn btn-outline-danger btn-lg" style="max-width:20%">Start</button>
          </form>
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


