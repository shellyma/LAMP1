<!DOCTYPE html>
<!--
/*
  Yangdizhu.com
  2012 All rights reserved.

  index.php
  Front page HTML 

  Author: Xiaoli, Ma
  03/10/2013

  */
-->
<html lang="en"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>洋地主</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="洋地主为您提供美国地产投资，置业导购与咨询">
    <meta name="author" content="土财主">
		

		<link id="switch_style" href="css/real_estate.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>

<body>
	
    <div class="container">

		
	<?php /*header + banner*/
	include('header.html');
	include('banner.html');
	?>
	<div class="row">
	<?php  /* search box, could replace with some description or guidance*/
	include('quickquery.php');
	?>

	<div class="span7 home_carousel no_margin_left pull-right">
		<!-- Start slideshow-carousel -->
		<div id="carousel-loader">
			
		</div>
		<div id="carousel" class="showcase">
									<div class="showcase-slide">
				<div class="showcase-content">
					<a href="map_properties.html"><img src="css/images/carousel_1.jpg" alt=""></a>
				</div>
				
				<div class="showcase-caption carousel-caption">
					<a href="map_properties.html"><h4>Map of properties</h4>
					<p>Interested in buying a flat or house in Richmond?</p></a>
				</div>
			</div>
						<div class="showcase-slide">
				<div class="showcase-content">
					<a href="listings.html"><img src="css/images/carousel_2.jpg" alt=""></a>
				</div>
				
				<div class="showcase-caption carousel-caption">
					<a href="listings.html"><h4>Search listings</h4>
					<p>View a listing of all the homes according to your taste, wherever you want</p></a>
				</div>
			</div>
						<div class="showcase-slide">
				<div class="showcase-content">
					<a href="property.html"><img src="css/images/carousel_3.jpg" alt=""></a>
				</div>
				
				<div class="showcase-caption carousel-caption">
					<a href="property.html"><h4>View a property</h4>
					<p>This is our featured house of the day, good value and spacious enough for a family of 5</p></a>
				</div>
			</div>
						
		</div>
		<!-- // end of slideshow-carousel -->
		
	</div>
</div>


<!-- 产品专区入口-->
<div class="row">
	<div class="span4">
		<!-- <h3><span>Latest</span> properties</h3> -->
		<h3>独栋新房专区</h3>
		<a href="singles.html"><img src="css/images/latest_properties.jpg" alt="" /></a>
		<p>买套房   把洋地主官方板块隐去，避免既当裁判员又当运动员的境地，在表面上尽量对于其他合伙人做到公平公正，激励士气。但是我们自己的产品以一个加盟商的方式来卖，不会引起其他合伙人（如璞玉）的猜忌。这样做到每个合伙人在最开始的时候都会不遗余力的推广洋地主，远远好过我们自己单打独斗。而且也兼顾我们自己做产品的利益。买套房就是最基本的买房模式，入门100w人民币
			<a href="singles.html" class="pull-right">
			<div class="span2 pull-right" style="margin-top: 10px;">
							<button class="btn btn-primary pull-right" type="button">进入专区</button>
							
			</div>
			</a>
		</p>
	</div>		
	<div class="span4">
		<!-- <h3><span>New</span> homes</h3> -->
		<h3>团购专区</h3>
		<a href="groups.html"><img src="css/images/new_homes.png" alt="" /></a>
		<p>合伙买   本质上是产权独有，利益风险均沾。在买完房子后，签署额外的我们统一规定的agreement，按照房产价值来分成出租的比例。10人为上限，组成一个pool
			<a href="groups.html" class="pull-right">
			<div class="span2 pull-right" style="margin-top: 10px;">
							<button class="btn btn-primary pull-right" type="button">进入专区</button>
							
			</div></a></p>
	</div>		
	<div class="span4">
		<!-- <h3><span>Homes</span> abroad</h3> -->
	    <h3>VIP客户</h3>
		<a href="vips.html"><img src="css/images/homes_abroad.png" alt="" /></a>
		<p>量身定制
			<a href="vips.html" class="pull-right">
			<div class="span2 pull-right" style="margin-top: 10px;">
							<button class="btn btn-primary pull-right" type="button">进入专区</button>
							
			</div>
		</a></p>
	</div>		
</div>		
<!-- 产品专区入口-->


<div class="row">
	<br />
	<div class="span4">
		<h3><span>Popular</span> cities</h3>
		
		
		<div id="home_map_canvas"></div>
	
	</div>

	<div class="span8"> <!-- retrieve from featured table-->
		<h3><span>Featured</span> listings</h3>
		
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Description</th>
					<th>Region</th>
					<th>Price</th>
					<th>Days on market</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="property.html">8 bedroom house for sale</a></td>
					<td>London</td>
					<td>&pound;39,950,000</td>
					<td>1 day</td>
					<td><a href="property.html">View</a></td>
				</tr>     
				<tr>
					<td><a href="property.html">2 bedroom bungalow for sale</a></td>
					<td>London</td>
					<td>&pound;215,000</td>
					<td>3 days</td>
					<td><a href="property.html">View</a></td>
				</tr>      
				<tr>
					<td><a href="property.html">3 bedroom house for sale</a></td>
					<td>London</td>
					<td>&pound;470,000</td>
					<td>2 weeks</td>
					<td><a href="property.html">View</a></td>
				</tr>  	 
				<tr>
					<td><a href="property.html">3 bedroom house for rent</a></td>
					<td>London</td>
					<td>&pound;1,000pm</td>
					<td>1 month</td>
					<td><a href="property.html">View</a></td>
				</tr>        
				<tr>
					<td><a href="property.html">6 bedroom house for sale</a></td>
					<td>London</td>
					<td>&pound;19,950,000</td>
					<td>2 months</td>
					<td><a href="property.html">View</a></td>
				</tr>     
				<tr>
					<td><a href="property.html">5 bedroom bungalow for sale</a></td>
					<td>London</td>
					<td>&pound;950pm</td>
					<td>3 months</td>
					<td><a href="property.html">View</a></td>
				</tr>      
				<tr>
					<td><a href="property.html">3 bedroom house for sale</a></td>
					<td>London</td>
					<td>&pound;470,000</td>
					<td>1 year</td>
					<td><a href="property.html">View</a></td>
				</tr>  	    
				
			</tbody>
		</table>
		<!-- More cities : <a href="map_properties.html">London</a>, <a href="map_properties.html">Scotland</a>, <a href="map_properties.html">Wales</a>, <a href="map_properties.html">Northern Ireland</a>, <a href="map_properties.html">Birmingham</a>, <a href="map_properties.html">Leeds</a>, <a href="map_properties.html">Glasgow</a>, <a href="map_properties.html">Sheffield</a>, <a href="map_properties.html">Bradford</a>, <a href="map_properties.html">Edinburgh</a>, <a href="map_properties.html">Liverpool</a>,  <a href="map_properties.html">Manchester</a> -->
		
	</div>
	
</div>

<?php
include ('footer.html');

?>

</div> <!-- /container -->


<div id="theme_switcher">
	<div class="btn-group">
		<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Switch theme <span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="#" data-rel="real_estate">Real Estate</a></li>
			<li><a href="#" data-rel="cerulean">Cerulean</a></li>
            <li><a href="#" data-rel="slate">Slate</a></li>
			<li><a href="#" data-rel="united">United</a></li>
			<li><a href="#" data-rel="cyborg">Cyborg</a></li>
            <li><a href="#" data-rel="spacelab">Spacelab</a></li>
			<li><a href="#" data-rel="journal">Journal</a></li>
			<li><a href="#" data-rel="simplex">Simplex</a></li>
            <li><a href="#" data-rel="amelia">Amelia</a></li>
			<li><a href="#" data-rel="original">Original</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.aw-showcase/jquery.aw-showcase.js"></script>
<link rel="stylesheet" href="js/jquery.aw-showcase/css/style.css" />
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<link rel="stylesheet" href="js/badger/badger.min.css" />
<script type="text/javascript" src="js/badger/badger.min.js"></script>

<link rel="stylesheet" href="js/sticky/sticky.min.css" />
<script type="text/javascript" src="js/sticky/sticky.min.js"></script>

<script type="text/javascript" src="js/portamento-min.js"></script>
<script type="text/javascript" src="js/global.js"></script>

</body>
</html>