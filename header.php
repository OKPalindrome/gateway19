
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css"/>
</head>
<body>
	<div class="container-fullwidth">
		<nav class="navbar navbar-expand-sm navbar-default fixed-top">
			<a class="navbar-brand" href="index.php">HOME</a>
			
			<!-- <ul class="navbar-nav">
    			<li class="nav-item">
      				<a class="nav-link" href="#"></a>
   			 	</li>
   			 	<li class="nav-item">
   			 		<a class="nav-link" href="#">Link 2</a>
   			 	</li>
   			</ul> -->
   			<ul class="navbar-nav ml-auto">					
   				<!-- ml-auto pushes items in right in BS4 -->
    			
            <?php
                if(isset($_SESSION['specialperson']))
                {
                  echo'<li class="nav-item">
                  <a class="nav-link" href="profile.php">Profile</a>
                  </li>';
                }
                else if(isset($_SESSION['teacher']))
                {
                  echo'<li class="nav-item">
                  <a class="nav-link" href="t-profile.php">Profile</a>
                  </li>';
                }
                else
                {
              echo'<li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
                  </li>';
                
                }

              if(isset($_SESSION['specialperson']) or isset($_SESSION['teacher']))
                {
                  echo'<li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
                else
                {
                    echo'<li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                  </li>';
                }
              ?>
   			 	
   			</ul>
		</nav>
	</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
