<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Bacon Beacon</title>

<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">

<style type="text/css">
.main {
	margin-top:64px;
}
.tree {
    min-height:20px;
    padding:19px;
    margin-bottom:20px;
    background-color:#fbfbfb;
    border:1px solid #999;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree>ui {
	padding-left:0px !important;
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
</style>

</head>
<body>

<div class="container">

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	<!--
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	-->
	  <a class="navbar-brand" href="#">Bacon Beacon - For those things you can't resist!</a>
	</div>
	<!-- we don't need no stinking nav!!
	<div class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#contact">Contact</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		  <ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li class="dropdown-header">Nav header</li>
			<li><a href="#">Separated link</a></li>
			<li><a href="#">One more separated link</a></li>
		  </ul>
		</li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Add Stuff</a></li>
	  </ul>
	</div>
	-->
  </div>
</div>



<div class="main">
	<div class="tree well">
		<ul>
			<li>
				<span><i class="icon-folder-open"></i> Food</span>
				<ul>
					<li>
						<span><i class="icon-leaf"></i>Restaurants</span> <a href="gen.php">Add Restaurant</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">15 East</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">A Voce Columbus</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">A Voce Madison</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Ai Fiori</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Aldea</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Annisa</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Aquavit</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Aska</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Brushstroke</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Eleven Madison Park</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Jewel Bako</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>Chef</span> <a href="gen.php">Add Chef</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Paul Bocuse</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Anthony Bourdain</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Charlie Trotter</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Emeril Lagasse</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Thomas Keller</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Sanjeev Kapoor</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Marco Pierre White</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Wolfgang Puck</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Jamie Oliver</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Gordon Ramsay</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>Vegetarian / Vegan</span> <a href="gen.php">Add Location</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Abita Brewing Co. Abita Springs LA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Alaskan Brewing Co. Juneau AK</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Allagash Brewing Co. Portland ME</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Anchor Brewing Co. San Francisco CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Ballast Point Brewing Co. San Diego CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bear Republic Brewing Co. Cloverdale CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bell's Brewery, Inc. Galesburg MI</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Big Sky Brewing Co. Missoula MT</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">BJ's Chicago Pizza & Brewery, Inc. Huntington Beach CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Blue Point Brewing Co. Patchogue NY</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Boston Beer Co. Boston MA</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>Speciality Ingredients</span> <a href="gen.php">Add Ingredient</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Abita Brewing Co. Abita Springs LA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Alaskan Brewing Co. Juneau AK</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Allagash Brewing Co. Portland ME</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Anchor Brewing Co. San Francisco CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Ballast Point Brewing Co. San Diego CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bear Republic Brewing Co. Cloverdale CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bell's Brewery, Inc. Galesburg MI</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Big Sky Brewing Co. Missoula MT</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">BJ's Chicago Pizza & Brewery, Inc. Huntington Beach CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Blue Point Brewing Co. Patchogue NY</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Boston Beer Co. Boston MA</a></span>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<span><i class="icon-folder-open"></i>Beer</span> 
				<ul>
				<li>
						<span><i class="icon-minus-sign"></i> By Brewery</span> <a href="gen.php"> (Add Brewery) </a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Abita Brewing Co. Abita Springs LA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Alaskan Brewing Co. Juneau AK</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Allagash Brewing Co. Portland ME</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Anchor Brewing Co. San Francisco CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Ballast Point Brewing Co. San Diego CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bear Republic Brewing Co. Cloverdale CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bell's Brewery, Inc. Galesburg MI</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Big Sky Brewing Co. Missoula MT</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">BJ's Chicago Pizza & Brewery, Inc. Huntington Beach CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Blue Point Brewing Co. Patchogue NY</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Boston Beer Co. Boston MA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Boulevard Brewing Co. Kansas City MO</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Breckenridge Brewery Denver CO</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Brooklyn Brewery Brooklyn NY</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Cold Spring Brewing Co./Third Street Brewhouse Cold Spring MN</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">CraftWorks Restaurants & Breweries, Inc. Chattanooga & Louisville TN/C</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Deschutes Brewery Bend OR</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Dogfish Head Craft Brewery Milton DE</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Firestone Walker Brewing Co. Paso Robles CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Flying Dog Brewery Frederick MD</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Founders Brewing Co. Grand Rapids MI</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Full Sail Brewing Co. Hood River OR</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Great Lakes Brewing Co. Cleveland OH</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Harpoon Brewery Boston MA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Karl Strauss Brewing Co. San Diego CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Lagunitas Brewing Co. Petaluma CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Left Hand Brewing Co. Longmont CO</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Long Trail Brewing Co. Bridgewater Corners VT</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Lost Coast Brewery and Cafe Eureka CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Matt Brewing Co. Utica NY</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">New Belgium Brewing Co. Fort Collins CO</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">New Glarus Brewing Co. New Glarus WI</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Ninkasi Brewing Co. Eugene OR</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">North Coast Brewing Co. Fort Bragg CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Odell Brewing Co. Fort Collins CO</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Oskar Blues Brewery Longmont CO</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Rogue Ales Newport OR</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Saint Arnold Brewing Co. Houston TX</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Shipyard Brewing Co. Portland ME</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Sierra Nevada Brewing Co. Chico CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Southern Tier Brewing Co. Lakewood NY</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">St. Louis Brewery, Inc./Schlafly Beers St. Louis MO</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Stevens Point Brewery Stevens Point WI</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Stone Brewing Co. Escondido CA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Summit Brewing Co. St. Paul MN</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">SweetWater Brewing Co. Atlanta GA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">The Gambrinus Co. San Antonio TX</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Troegs Brewing Co. Hershey PA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Uinta Brewing Co. Salt Lake City UT</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-minus-sign"></i> By Beer</span> <a href="gen.php"> (Add Beer) </a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Avery - The Maharaja</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bear Republic Racer - 5 IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Boulevard - Tank 7 Farmhouse Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Deschutes - Black Butte Porter</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Deschutes - The Abyss</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Firestone Walker - Double Jack</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Firestone Walker - Parabola</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Founders - Kentucky Breakfast Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Goose Island - Bourbon County Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Great Lakes - Edmund Fitzgerald</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Green Flash - Palate Wrecker</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Green Flash - West Coast IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Lagunitas - Brown Shugga'</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Lagunitas - IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Lagunitas - Little Sumpin' Sumpin'</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Left Hand - Milk Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Left Hand - Milk Stout Nitro</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">New Belgium - La Folie</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">North Coast - Old Rasputin</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Odell - IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Odell - Myrcenary</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Ommegang - Hennepin Saison Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Ommegang - Three Philosophers</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Oskar Blues - Dale's Pale Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Russian River - Blind Pig I.P.A</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Russian River - Consecration</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Russian River - Pliny the Younger</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Russian River - Supplication</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Southern Tier - Pumking</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Sierra Nevada - Torpedo Extra IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Stone - Enjoy By IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Stone - IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Stone - Sublimely Self-Righteous</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Surly - Furious</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">The Alchemist - Heady Topper</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Three Floyds - Zombie Dust</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Troegs - Nugget Nectar</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-minus-sign"></i> By Style</span> <a href="gen.php"> (Add )
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">American Amber / Red Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">American Double / Imperial IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">American Double / Imperial Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">American IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Baltic Porter</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Belgian Dark Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Belgian IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Biere de Champagne / Biere Brut</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Biere de Garde</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Black & Tan</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Bock</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Braggot</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Chile Beer</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Cream Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Doppelbock</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Dortmunder / Export Lager</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Dubbel</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Eisbock</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">English Barleywine</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">English India Pale Ale (IPA)</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">English Pale Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Extra Special / Strong Bitter (ESB)</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Faro</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Flanders Oud Bruin</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Flanders Red Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Foreign / Export Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Fruit / Vegetable Beer</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">German Pilsener</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Gueuze</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Herbed / Spiced Beer</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Keller Bier / Zwickel Bier</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Lambic - Fruit</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Lambic - Unblended</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Maibock / Helles Bock</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Milk / Sweet Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Oatmeal Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Old Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Pumpkin Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Quadrupel (Quad)</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Russian Imperial Stout</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Rye Beer</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Saison / Farmhouse Ale</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Smoked Beer</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Tripel</a></span>
							</li>
						</ul>
					</li>						
					<li>
						<span><i class="icon-minus-sign"></i> By ABV</span> <a href="gen.php"> (Add Range)
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">3%-3.9%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">4%-4.9%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">5%-5.9%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">6%-6.9%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">7%-7.9%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">8%-8.9%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">9%-9.9%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">10%+</a></span>
							</li>
						</ul>
					</li>						
		
				</ul>
			</li>
			<li>
				<span><i class="icon-folder-open"></i>Job Fairs</span>
				<ul>
					<li>
						<span><i class="icon-leaf"></i>Quality Health Care, Inc.</span> <a href="gen.php">Add Guest</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">15 East</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">A Voce Columbus</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>New York City Fire Department</span> <a href="gen.php">Add Guest</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">15 East</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">A Voce Columbus</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>New York City Police Department</span> <a href="gen.php">Add Guest</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">15 East</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">A Voce Columbus</a></span>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<span><i class="icon-folder-open"></i> Events</span>
				<ul>
					<li>
						<span><i class="icon-leaf"></i>New York Comic Con</span> <a href="gen.php">Add Guest</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">The Block Guests</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>Gaymer X 2</span> <a href="gen.php">Add Guest</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">The Block Guests</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>South by Southwest</span> <a href="gen.php">Add Guest</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">The Block Guests</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-leaf"></i>The Sham Film Festival</span> <a href="gen.php">Add Guest</a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Comic Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Spotlight Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Featured Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Entertainment Special Guests</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">The Block Guests</a></span>
							</li>
						</ul>
					</li>
				</ul>
			</li>
						
		</ul>
	</div>
</div>

<script src="lib/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(function () {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });
    
    //hide children on load
	var children = $(".tree li ul li");
	children.hide();
});
</script>

</body>
</html>