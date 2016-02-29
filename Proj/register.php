<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <style >
  body{
          background: #eedfcc url(ok1.jpg) no-repeat center top;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;

       }

       .aa{
            border: 2px solid  white; min-height:200px ;width:300px;
            background: whitesmoke;
            padding:20px;
            border-radius:8px;
           
        }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " href="index.php"><b>Text2Text</b></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
     <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
    </ul>
  </div>

   
</nav>
<br>
<br>
<center>
<form method="post" class="aa">
      
  <table>
    <tr>
      <td width="100px"><label>Lastname:</label></td>
      <td width="350px"><input type="text" class="form-control" name="lname" placeholder="Lastname"/> </td>
   </table> </tr> 
 
    <table>
    <tr>
      <td width="100px"><label>Firstname:</label></td>
      <td width="350px"><input type="text" class="form-control" name="fname" placeholder="Firstname"/> </td>
    </tr>
  </table>
   
    <table>
    <tr>
      <td width="100px"><label>Username:</label></td>
      <td width="350px"><input type="text" class="form-control" name="username" placeholder="Username"/> </td>
    </tr>  
    </table>

    <table>
    <tr>
      <td width="100px"><label>Email Address:</label></td>
      <td width="350px"><input type="email" class="form-control" name="email" placeholder="Email Address"/> </td>
    </tr>
    </table>

    <table>
    <tr>
      <td width="100px"><label>Password:</label></td>
      <td width="350px"><input type="password" class="form-control" name="password" placeholder="Password"/> </td>
    </table></tr>
    
     <table>
    <tr>
      <td width="100px"><label>Confirm Password:</label></td>
      <td width="350px"><input type="password" class="form-control" name="cpassword" placeholder="Confirm Password"/> </td>
    </table></tr>
    
    <center>
    <label><button class="btn btn-primary" name="signup">Sign up</button></label>
    </center>
  
  </form>
   </center>
</body>
</html>
