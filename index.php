<?php
  if(isset($_COOKIE['username'])){
    $current_user = $_COOKIE['username'];
  }

?>
<!DOCTYPE html>
<html>
<head>
 <?php
  require 'head.php';
 ?>
</head>

<body>
<!--navigation start-->
	<nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo">Logo</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php
          if  (isset($current_user)){
          echo '<li><a class="dropdown-button" href="#" data-activates="dropdown1">Hello, '.$current_user.'</a></li>';
          echo '<ul id="dropdown1" class="dropdown-content">
            <li><a href="logout.php">Logout</a></li>
          </ul>';
          }
          else{
            echo '<li><a href="login.php">Login</a></li>';
          }
	       ?>
	      </ul>
	    </div>
	  </nav>
 <!--navigation end-->

 <div class="container">
 <h1>
 	Welcome to simple page
 </h1>
 </div>

<!--slide-->
<div class="container">
<div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
</div> 
<!--slider end-->

<!--card begin-->

      <div class="row">
      <!-- first card -->
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="e.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
      <!-- end of first card -->
      <!-- second card -->
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="e.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
      <!-- end of second card -->
      <!-- third card -->
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="e.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

      <!-- end of third card -->
<!-- card end -->


 <?php
  require 'script.php';
 ?>

      <script>		
      $(document).ready(function(){
      $('.slider').slider();
      $(".dropdown-button").dropdown();
    	});
    	</script>
      

</body>
</html>