<?php include('server.php') ?>
<!-- <!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div> -->
	
  <!-- <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>phone</label>
  	  <input type="phone" name="phone" > -->
      <!-- value="<?php //echo $phone; ?>" -->
  	<!-- </div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
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
				background-repeat: no-repeat; /* Do not repeat the image */
				width:100%;
				height:100%;
				background-image: url("images/autumn-2902507_1920.jpg");
          min-height: 100vh;
      flex-direction: column;
  /* background: #fff; */
	display:flex;
/*  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://unsplash.it/1200/800/?random');*/
/*  background-repeat: no-repeat;*/
/*  background-size: cover;*/
/*  background-position: center center;*/
/*  background-fill-mode: rgba(0,0,0,0.5);*/
/*
  display: flex;
  justify-content: center;
  align-items: center;
*/
/*  height: 100vh;*/
}
.container {

  /* background:white; */
  padding: 20px 25px;
/*  border: 5px solid #26a69a;*/
  /* width: 550px;
  height: auto;
  box-sizing: border-box;
  position: relative; */
}
/* .col.s6 > .btn {
   width: 100%;
} */
.gender-male,.gender-female {
  display: inline-block;
}
.gender-female {
  margin-left: 35px;
}
radio:required {
  border-color: red;
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
.row {margin-bottom: 10px;}

.ngl {
  position: absolute;
  top: -20px;
  right: -20px;
}
  
        
         main {
      flex: 1 0 auto;
    }
        
        </style>
      </head>
      <body>
          
          <!-- <div class="navbar-fixed">
   
            <nav>
    <div class="nav-wrapper #424242 grey darken-3"> -->
<!--      <a href="#!" class="brand-logo">Logo</a>-->
        <!-- <a href="swaad.html"> <img src="images/download%20(3).png" style="height: 65px;width: 115px"></a>
      <a href="#" data-target="slide-out" class="sidenav-trigger "><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down ">
           <li><a href="swaad.html">Home</a></li>
        <li><a href="signup.html">LogIn</a></li>
          
        <li><a href="">Register</a></li>
      </ul>
    </div>
  </nav>
        </div>
         -->
        
        
        
<!--
  <ul class="sidenav dark" id="mobile-demo">
       <li><a href="#">home</a></li>
    <li><a href="#">LogIn</a></li>
    <li><a href="#">SignUp</a></li>

  </ul>
-->
<!--         
       <ul id="slide-out" class="sidenav">
    <li><div class="user-view ">
      <div class="background white ">
        <img src="images/sunset-3615276_1920.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/dog-1163076_1920.jpg"></a>
      <a href="#name"><span class="white-text name">User Account</span></a>
      <a href="#email"><span class="white-text email">swaad@gmail.com</span></a>
    </div></li>
           <li><a href="swaad.html" ><i class="material-icons">home</i>Home</a></li>
    <li><a href="signup.html" ><i class="material-icons">account_circle</i>LogIn</a></li>
    <li><a href="register.html"><i class="material-icons">create</i>Register</a></li>
    <li><div class="divider"></div></li> -->
<!--
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
-->
           
  <!-- </ul>
         -->
          
          <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="images/download1.png">
      <div class="section"></div>

      <h5 class="orange-text" style="font-family: 'bitter',serif;">Please, Register yourself.</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            
<div class="row">
    <form class="col s12" id="reg-form" method="post" action="register.php">
      <div class="row">
        <div class="input-field col s6">
          <input name="username" type="text" value="<?php echo $username; ?>">
          <label for="username">Username</label>
        </div>
        <!-- <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" required>
          <label for="last_name">Last Name</label>
        </div> -->
      </div>
      <!-- <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>
      </div> -->
          <div class="row">
        <div class="input-field col s6">
        <input name="phone" type="text" data-length="10" value="<?php echo $phone; ?>">
<!--          <i class="material-icons prefix">phone</i>-->
<!--          <input id="icon_telephone" type="tel" class="validate">-->
            <label >Phone</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password_1" type="password"  >
          <label for="password">Password</label>
        </div>
      </div>
			<div class="row">
        <div class="input-field col s12">
          <input name="password_2" type="password" >
          <label for="password">Confirm Password</label>
        </div>
      </div>
      <div class="row">
<!--
        <div class="input-field col s6">
          <div class="gender-male">
            <input class="with-gap" name="gender" type="radio" id="male" required />
            <label for="male">Male</label>
          </div>
          <div class="gender-female">
            <input class="with-gap" name="gender" type="radio" id="female" required />
            <label for="female">Female</label>
          </div>
        </div>
-->

        <div class="input-field col s6">
          <button class="btn btn-med btn-register waves-effect waves-light orange" type="submit" name="reg_user">Register
            <!-- <i class="material-icons right">done</i> -->
          </button>
        </div>
      </div>
    </form>
  </div>
            
          
  <a  href="login.php"  class="ngl btn-floating btn-large waves-effect waves-light black"><i class="material-icons">input</i></a>

 </div>
        </div>
      </center>
          </main>
      
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <script>
        //sidenav
         const sideNav = document.querySelector('.sidenav');
            M.Sidenav.init(sideNav,{edge:'right'});
            
            
        //slider
            const slider = document.querySelector('.slider'); 
            M.Slider.init(slider,{indicators:false});
            //regform
            
            const sel = document.querySelector('.select');
            M.Select.init(select,{});
            
            //telephone count
            const tel = document.querySelector('input#icon_telephone');
            M.Telephone.init(tel,{});
    </script>
    
</body>

</html>  
      