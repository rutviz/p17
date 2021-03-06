<!DOCTYPE html>
<html lang="en-US">
<head>

	<!-- Meta tags & title /-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="all,index,follow" />

	<title>Team</title>
	<meta name="description" content="Team Page Layout" />

	<!-- <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />   -->

	 <!--  Android Chrome Color-->
    <meta name="theme-color" content="#000000">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<!-- Stylesheets /-->
	<link rel="stylesheet" type="text/css" href="css/team.css" /> <!-- Main stylesheet /-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> <!-- Open Sans /-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> <!-- Montserrat -->
    
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'> <!-- PT Sans Narrow /-->
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> <!-- Font Awesome /-->
	
	<!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<script>
			
 function navcolor(){
 	 if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("header").css("background-color","#000");
    } else {
        $("header").css("background-color","transparent");
    }
 	
 }

</script>

<style>
	.fa {
		color: #fff;
	}

	.indicator{
	border: 2px solid rgb(33, 150, 243);
    border-radius: 50%;
	}

	.container{
		width: 100%;
	}

	.two {
	  -webkit-animation-duration: 1s; 
	  -webkit-animation-delay: 0.5s;
	}

	.tab.col.s4 {
		    font-family: 'norwester';
	}

	.tabs {
		background: #0b0b0b; /* fallback for old browsers */
		background: -webkit-linear-gradient(to left, #0b0b0b , #383838); /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to left, #0b0b0b , #383838); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}

	.parallax-container {
		font-family: 'Montserrat', sans-serif !important;
	}
</style>

</head>

<body onscroll="navcolor();" style="

	background: #000000; /* fallback for old browsers */
	background: -webkit-linear-gradient(to left, #000000 , #434343); /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to left, #000000 , #434343); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	        ">

<?php include('header.html'); ?>

	<div class="parallax-container" style="height: 400px"> 
		<div class="section no-pad-bot">
	      <div class="container">
	        <div class="row center hide-on-med-and-down" style="margin-top: 11%; font-size: 100px; color: #fff; font-weight: 600;">
	          <div class="header col s12 dark">Team</div>
	        </div>
	        <div class="row center hide-on-large-only" style="margin-top: 50%; font-size: 50px; color: #fff; font-weight: 600;">
	          <div class="header col s12 dark">Team</div>
	        </div>
	      </div>
	    </div>
      <div class="parallax"><img src="./images/team.jpg" style="background-color: #222"> </div>
    </div>

  <div class="row">
    <div class="col s8 offset-s2" style="text-align: center; overflow: hidden; margin-top: 0.3%;">
      <ul class="tabs " style="background-color: #f5f5f5; text-align: center;">
        <li class="tab col s6"><a href="#core" style="color: #1565c0; font-size: 18px; font-weight: 500;">Core Team</a>
        <li class="tab col s6"><a href="#web" style="color: #1565c0; font-size: 18px; font-weight: 500;">Web Team</a>
      </ul>
    </div>
    <div id="core" class="col s12">
    	
	   	<!--CORE TEAM SECTION -->	
		<section id="TEAM" >
			<h3>Core Team</h3> <!-- Section Title -->
			<div class="separator"></div> <br><br>
			<div class="container">
				
				<!-- First Row of TEAM -->
				<div class="row one animated fadeInUp">
				
					<!-- team 1 -->
					<div class="col m3 c1" style="display: none" >
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-1.png" alt="Harshit Singh" title="Profile-Pic" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-1.png" alt="Harshit Singh" title="Profile-Pic" style="background-color: #ddd;"/>
							</div>
							<span>Core Team</span>
							<h4><span>Harshit </span> Singh</h4>
						</div>	
						
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Harshit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Harshit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>	 		
						</ul>
					</div>
					
					<!-- team 2 -->
					<div class="col m3">
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-2.png" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-2.png" style="background-color: #ddd;" />
							</div>
							<span>Core Team</span>
							<h4><span>Rutviz</span> Vyas</h4>
						</div>	
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Rutviz\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Rutviz\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
					
					<!-- team 3 -->
					<div class="col m3">
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-3.png" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-3.png" style="background-color: #ddd;" />
							</div>
							<span>Core Team</span>
							<h4><span>Dhrumit</span> Patel</h4>
						</div>					
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
						</ul>				
					</div>
					
					<!-- team 4 -->
					<div class="col m3">
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-4.png" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-4.png" style="background-color: #ddd;" />
							</div>
							<span>Core Team</span>
							<h4><span>Sunny</span> Radadiya</h4>
						</div>					
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Sunny\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Sunny\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
						</ul>					
					</div>
					
				</div> <!-- End First Row -->
				<br>
				<!-- Second Row of TEAM -->
				<div class="row two animated fadeInUp">
				
					<!-- team 5 -->
					<div class="col m3">
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-3.png" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-3.png" style="background-color: #ddd;" />
							</div>
							<span>Core Team</span>
							<h4><span>Dhrumit</span> Patel</h4>
						</div>					
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
					
					<!-- team 6 -->	
					<div class="col m3">
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-4.png" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-4.png" style="background-color: #ddd;" />
							</div>
							<span>Core Team</span>
							<h4><span>Sunny</span> Radadiya</h4>
						</div>					
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Sunny\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Sunny\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
					
					<!-- team 7 -->
					<div class="col m3">
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-1.png" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-1.png" style="background-color: #ddd;" />
							</div>
							<span>Core Team</span>
							<h4><span>Harshit </span> Singh</h4>
						</div>					
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Harshit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Harshit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
						</ul>					
					</div>
					
					<!-- team 8 -->
					<div class="col m3">
						<div class="member-profile">
							<div class="unhover_img">
							<img src="img/team-2.png" style="background-color: #ddd;" />
							</div>
							<div class="hover_img">
							<img src="img/team-2.png" style="background-color: #ddd;" />
							</div>
							<span>Core Team</span>
							<h4><span>Rutviz</span>Vyas</h4>
						</div>					
						<ul>
							<li><a class="col s2" onclick="Materialize.toast('Harshit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

							<li><a class="col s2" onclick="Materialize.toast('Harshit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

							<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
					
				</div>	<!-- End Second Row -->	
				<br>
			</div>
		</section>
    </div>
    

    <div id="web" class="col s12">
    	<!--WEB TEAM SECTION -->	
	<section id="TEAM" >
		<h3>Web Team</h3> <!-- Section Title -->
		<div class="separator"></div> <br><br>
		<div class="container">
			<!-- First Row of TEAM -->
			<div class="row one animated fadeInUp">
			
				<!-- team 5 -->
				<div class="col m3">
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-3.png" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-3.png" style="background-color: #ddd;" />
						</div>
						<span>Web Team</span>
						<h4><span>Dhrumit</span> Patel</h4>
					</div>					
					<ul>
						<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
				
				<!-- team 6 -->	
				<div class="col m3">
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-4.png" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-4.png" style="background-color: #ddd;" />
						</div>
						<span>Web Team</span>
						<h4><span>Sunny</span> Radadiya</h4>
					</div>					
					<ul>
						<li><a class="col s2" onclick="Materialize.toast('Sunny\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a class="col s2" onclick="Materialize.toast('Sunny\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
				
				<!-- team 7 -->
				<div class="col m3">
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-1.png" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-1.png" style="background-color: #ddd;" />
						</div>
						<span>Web Team</span>
						<h4><span>Harshit </span> Singh</h4>
					</div>					
					<ul>
						<li><a class="col s2" onclick="Materialize.toast('Harshit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a class="col s2" onclick="Materialize.toast('Harshit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
					</ul>					
				</div>
				
				<!-- team 8 -->
				<div class="col m3">
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-2.png" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-2.png" style="background-color: #ddd;" />
						</div>
						<span>Web Team</span>
						<h4><span>Rutviz</span>Vyas</h4>
					</div>					
					<ul>
						<li><a class="col s2" onclick="Materialize.toast('Harshit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a class="col s2" onclick="Materialize.toast('Harshit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
				
			</div>	<!-- End Second Row -->	
			<br>
			<!-- Second Row of TEAM -->
			<div class="row two animated fadeInUp">
			
				<!-- team 1 -->
				<div class="col m3 c1" style="display: none" >
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-1.png" alt="Harshit Singh" title="Profile-Pic" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-1.png" alt="Harshit Singh" title="Profile-Pic" style="background-color: #ddd;"/>
						</div>
						<span>Web Team</span>
						<h4><span>Harshit </span> Singh</h4>
					</div>	
					
					<ul>
						<li><a href="#" class="col s2" onclick="Materialize.toast('Harshit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a href="#" class="col s2" onclick="Materialize.toast('Harshit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>	 		
					</ul>
				</div>
				
				<!-- team 2 -->
				<div class="col m3">
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-2.png" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-2.png" style="background-color: #ddd;" />
						</div>
						<span>Web Team</span>
						<h4><span>Rutviz</span> Vyas</h4>
					</div>	
					<ul>
						<li><a class="col s2" onclick="Materialize.toast('Rutviz\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a class="col s2" onclick="Materialize.toast('Rutviz\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
				
				<!-- team 3 -->
				<div class="col m3">
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-3.png" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-3.png" style="background-color: #ddd;" />
						</div>
						<span>Web Team</span>
						<h4><span>Dhrumit</span> Patel</h4>
					</div>					
					<ul>
						<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a class="col s2" onclick="Materialize.toast('Dhrumit\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
					</ul>				
				</div>
				
				<!-- team 4 -->
				<div class="col m3">
					<div class="member-profile">
						<div class="unhover_img">
						<img src="img/team-4.png" style="background-color: #ddd;" />
						</div>
						<div class="hover_img">
						<img src="img/team-4.png" style="background-color: #ddd;" />
						</div>
						<span>Web Team</span>
						<h4><span>Sunny</span> Radadiya</h4>
					</div>					
					<ul>
						<li><a class="col s2" onclick="Materialize.toast('Sunny\'s Mob: +91 823-896-6338', 3000, 'rounded')"><i class="fa fa-phone"></i></a></li>

						<li><a class="col s2" onclick="Materialize.toast('Sunny\'s E-mail: harshitks2203@gmail.com', 3000, 'rounded')"><i class="fa fa-envelope"></i></a></li>

						<li><a href="#" target="_blank" class="col s2"><i class="fa fa-facebook"></i></a></li>
					</ul>					
				</div>
				
			</div> <!-- End First Row -->
			<br>
		</div>
	</section>
    </div>


  </div>
<?php 
	include('footer.html') 
	?>
	
	<!-- //TEAM SECTION -->	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- Load jQuery -->

	 <!--Import jQuery before materialize.js-->
    
       <!-- Compiled and minified JavaScript -->
  	<script src="./js/materialize.min.js"></script>

	<script>
		
  $(document).ready(function(){
  	$(".c1").show();
  	$(".c1").fadeIn();
    $('.tooltipped').tooltip({delay: 50});

      $('.parallax').parallax();
	  $(".button-collapse").sideNav();

  });
	</script>
</body>
</html>	