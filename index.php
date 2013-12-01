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
	  <a class="navbar-brand" href="#">Bacon Beacon</a>
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
				<span><i class="icon-folder-open"></i> Beer</span> 
				<ul>
					<li>
						<span><i class="icon-minus-sign"></i> By Beer</span> <a href=""> (add beer) </a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="gen.php">Southern Tier Pumking</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-minus-sign"></i> By Brewery</span> <a href=""> (add brewery) </a>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="">Southern Tier</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="">Booker</a></span>
							</li>
						</ul>
					</li>
					<li>
						<span><i class="icon-minus-sign"></i> By Type</span>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="">IPA</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="">Lager</a></span>
							</li>
						</ul>
					</li>						
					<li>
						<span><i class="icon-minus-sign"></i> By ABV</span>
						<ul>
							<li>
								<span><i class="icon-leaf"></i> <a href="">&lt; 3%</a></span>
							</li>
							<li>
								<span><i class="icon-leaf"></i> <a href="">&lt; 4%</a></span>
							</li>
						</ul>
					</li>						
		
				</ul>
			</li>
			<li>
				<span><i class="icon-folder-open"></i> Food</span>
				<ul>
					<li>
						<span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
					</li>
				</ul>
			</li>			
			<li>
				<span><i class="icon-folder-open"></i> Events</span>
				<ul>
					<li>
						<span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
					</li>
				</ul>
			</li>
			<li>
				<span><i class="icon-folder-open"></i> Employment</span>
				<ul>
					<li>
						<span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
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