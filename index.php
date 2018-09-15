<?php 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
 	<title>Members</title>
 	<script type="text/javascript" src="jquery.js"></script>
 	<script type="text/javascript" src="bootstrap.js"></script>
 </head>
 <style type="text/css">
	
	.navbar{
    	padding-top: 24px!important;
    	padding-left: 24px!important;
		padding-right: 24px!important;
		padding-bottom: 24px!important;
		background: #222!important;
		border-radius: 0%!important;
	}

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 75%;
      margin: auto;
  }

  .members{
    padding: 125px 0 125px 0;
    background: #fff;
  }

  .members-title{
    font-size: 24px;
    font-family: 'Raleway', sans-serif;
  }

  .about-text{
    font-size: 16px;
    font-family: 'Raleway', sans-serif;
  }

  @media (max-width: 1318px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
  }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
    margin-top: 7.5px;
  }
  .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
      display:block !important;
  }
}

</style>
 <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">ACES</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-right navbar-nav">
      <li><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Founder's Message</a></li>
          <li><a href="#">Chancellor's Message</a></li>
          <li><a href="#">Secretary's Message</a></li>
          <li><a href="#">Principal's Message</a></li>
          <li><a href="#">About BVDU</a></li>
          <li><a href="#">Achievements</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Programmes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Civil Engineering</a></li>
          <li><a href="#">Computer Engineering</a></li>
          <li><a href="#">Chemical Engineering</a></li>
          <li><a href="#">Information Engineering</a></li>
          <li><a href="#">Electrical Engineering</a></li>
          <li><a href="#">Electronics Engineering</a></li>
          <li><a href="#">Mechanical Engineering</a></li>
          <li><a href="#">Production Engineering</a></li>
          <li><a href="#">Basic Science and Humanities</a></li>
          <li><a href="#">E & TC Engineering</a></li>
          <li><a href="#">Computer Science and Business Systems</a></li>
        </ul>
      </li>
      <li><a href="#">R & D</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admission<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Undergraduate Courses</a></li>
          <li><a href="#">Postgraduate Courses</a></li>
          <li><a href="#">Admission 2018 Brochures</a></li>
          <li><a href="#">Counselling Schedule: Admissions 2018-19</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Library Facilities<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Central Library</a></li>
          <li><a href="#">Campus and Facilities</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Activities<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Students Clubs</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Cultural Activities</a></li>
          <li><a href="#">Bhartiyam 2017</a></li>
        </ul>
      </li>
      <li><a href="#">Training & Placement</a></li>
	    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Alumni<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Alumni Reports</a></li>
          <li><a href="#">Alumni Association Portal</a></li>
        </ul>
      </li>
      <li><a href="#">Members</a></li>
      <li><a href="login.html" target="_blank">Login</a></li>
      <li><a href="register.html" target="_blank">Register</a></li>
    </ul>
  </div>
  </div>
</nav>
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="bg 1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="bg 2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="bg 3.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="members">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center members-title">Members</div>
		</div>
	</div>
</div>
 </body>
 </html>