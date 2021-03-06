<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	 <!-- CSS reset -->
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/events.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

  	<style>
	header{
		
		position:sticky;
	}
	</style>
	<title>Filter</title>
</head>
<body onscroll="navcolor();">
	
	<?php
		include('header.html');
	?>
	<div class="parallax-container">
      <div class="parallax"><img src="http://materializecss.com/images/parallax1.jpg"></div>
    </div>
	<div>
	<main class="cd-main-content" style="background-color:white">
		<div class="cd-tab-filter-wrapper" >
			<div class="cd-tab-filter " >
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on Event2 -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".Event1"><a href="#0" data-type="Event1">Event1</a></li>
					<li class="filter" data-filter=".Event2"><a href="#0" data-type="Event2">Event2</a></li>
					<li class="filter" data-filter=".Event3"><a href="#0" data-type="Event3">Event3</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul id="mix-wrapper">
				<li class="mix Event1">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="https://displate.com/displates/2015-05-11/c49f983aed6ad8713b81edf01de73bfa.jpg?w=400&h=400&v=3" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			     </div>
     			</li>				

				<li class="mix Event2">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="https://thumbs.dreamstime.com/x/hand-drawn-minimal-alphabet-sans-serif-elegant-font-vector-design-48737104.jpg" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			    </div>
			    </li>

				<li class="mix Event3">
					
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="https://www.pixel77.com/wp-content/uploads/2014/07/pixel77-free-vector-minimal-tower-1906-400.jpg" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			     </div>
				</li>

				<li class="mix Event1">
					
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="http://3.bp.blogspot.com/-MwK7d1WakO8/Tnz-1kfgCSI/AAAAAAAAJZw/sJzgDC2FVQs/s400/minimal_modern_architecture_house_3.jpg" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			     </div>
				</li>

				<li class="mix Event3">
				
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="http://thumbs2.picclick.com/d/l400/pict/232141183373_/Minimal-Tracks-Various-Artists-Audio-CD.jpg" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			     </div>
				</li>

				<li class="mix Event2">
				
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="https://displate.com/displates/2014-07-04/d77f81c7361608f08937ec6b5faa53fe.jpg?w=400&h=400&v=3" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			    </div>
				</li>

				<li class="mix Event2">
				
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="http://sketchhunt.com/wp-content/uploads/2015/04/invision-affiliate_400x400.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			    </div>
				</li>

				<li class="mix Event1">
					
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="http://static.tumblr.com/7260e7013159c01347c55f1c9f4e6fa6/qp1qbto/KYJmii13a/tumblr_static_tumblr_static_icon.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>Lorem Ipsum</h1><br><br>
			                <p class="price">₹ 200</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			              </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->
	</main> <!-- cd-main-content --></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    
<script>
 $(document).ready(function(){
      $('.parallax').parallax();
	  $(".button-collapse").sideNav();
    });
	
 function navcolor(){
 	 if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
        $("header").css("background-color","#000");
    } else {
        $("header").css("background-color","transparent");
    }
 	
 }
</script>
</body>
</html>










