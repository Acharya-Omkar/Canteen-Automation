<?php include('server.php') ?>
<!-- <!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h1>Login</h1>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html> -->






<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="swaad.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bitter|Pacifico" rel="stylesheet">
        
        
        
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
      
       <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
			background-image: url("images/autumn-2902507_1920.jpg");
      /* background: #fff; */
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
           
           .container {
  animation: showUp 0.5s cubic-bezier(0.18, 1.3, 1, 1) forwards;
}
@keyframes showUp {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
  </style>
</head>

<body id="home" class="scrollspy">
    
    <!-- <div class="navbar-fixed">
         <ul id="dropdown1" class="dropdown-content">
  <li><a href="reggenis.html"> Employee</a></li>
  <li><a href="#!"> HR</a></li>
  <li class="divider"></li> -->
<!--  <li><a href="#!">three</a></li>-->
<!-- </ul>
        <ul id="dropdown2" class="dropdown-content">
  <li><a href="genlog.html"> Employee</a></li>
  <li><a href="hrlog.html"> HR</a></li>
  <li class="divider"></li> -->
<!--  <li><a href="#!">three</a></li>-->
<!-- </ul>
<nav>
  <div class="nav-wrapper black">
    <a href="#!" class="brand-logo"><img src="images/download.png" style="height: 65px;width: 115px"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="genesis.html">Home</a></li> -->
<!--      <li><a href="badges.html">Components</a></li>-->
      <!-- Dropdown Trigger -->
              <!-- <li><a class="dropdown-trigger1" href="#!" data-target="dropdown2">Login<i class="material-icons right">arrow_drop_down</i></a></li>

      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Register<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
        
        
        
    </div>
     -->
   
<!--      <a href="#!" class="brand-logo">Digital Solutions</a>-->

  
    
    
    
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>
			<img src="images/download1.png" style="height: 215px;width: 215px">
        <!-- <h2>Digital Solutions</h2> -->
      <h5 class="orange-text" style="font-family: 'bitter',serif;">LogIn</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12"  method="post" action="login.php">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='#' />
                <label for='email'>Enter your username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='red-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                   <button name='login_user' class='col s12 btn btn-large waves-effect orange'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="register.php" style="font-family: 'bitter',serif ;color :white">Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
  <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <script>
        //sidenav
       const drop = document.querySelector('.dropdown-trigger');
            M.Dropdown.init(drop,{edge:'right'});
            const drop1 = document.querySelector('.dropdown-trigger1');
            M.Dropdown.init(drop1,{edge:'right'});
            
        //slider
            const slider = document.querySelector('.slider'); 
            M.Slider.init(slider,{indicators:false});
    </script>
    
</body>

</html>


















