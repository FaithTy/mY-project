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
<body class>

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
	
     <center>
<div class="aa"  >
	<form method="post">
			
	<table>
		<tr>
			 <center>
			<td width="100px"><label>Username</label></td>
			<td width="350px"><input type="text" class="form-control" name="username" placeholder="Username"/></td>
		</center>
		</tr>	
	</table></br>
	<table>
		<tr>
			<td width="100px"><label>Password</label></td>
			<td width="350px"><input type="password" class="form-control" name="password" placeholder="Password"/> </td>
		</tr>
	</table>
		<center>
			<br>
			<small>
					<a href="#" style="text-decoration:none;">FORGOT PASSWORD? </a>
			</small>
		<label><button class="btn btn-primary" name="login">LOG IN</button></label>		
		</center>
	
	</form>
</div>
     </center>

   

</body>


<footer>
	<center>
	    <div class="col-lg-12">
<span class="glyphicon glyphicon-copyright-mark" style="color:white;"></span>
<label style="color:white;" > Copyright All Rights Reserved 2016</label>
        <div>
    </center>
</footer>

</html>
