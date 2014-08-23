<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<!-- SEO meta tags start -->
	<meta name="description" content="Are you looking for quality work from an independent contractor?  We offer quality indoor and outdoor work at affordable rates. Contact us today!">
	<meta name="keywords" content="Chicago, IL 60656, Harwood Heights, IL 60706, <?php echo $metaKey; ?> Garage Doors & Floors, Trim & Cabinets, Balconies, Stairwells, Interior Painting, Drywall Repair & Patching, Light Carpentry,
Conference Rooms, Common Areas, Fences & Railings, Concrete & Wood, Sealing, Decks & Porches, Offices, 
Refinishing of Doors & Woodwork, Water Damage Repair, Windows & Doors, Lobbies & Hallways">
	<meta name="author" content="Marcin Ufniarz">
		<!-- SEO meta tags end -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
	<script src="modernizr.min.js"></script>  <!-- modernizer.min.js detects if localstorage is avaible on the browser -->

	<!-- Site specific files 
	<link rel="stylesheet" href="custom-css/custom-css.css" />
	<script type="text/javascript" src="custom-js/custom-js.js"></script> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">
		if (Modernizr.localstorage) {  // checks for localstorage true
		  // window.localStorage is available!
	    	function store_name() {
	    		var user_name = prompt("What's your name?");
	    		localStorage.setItem("user_name", user_name);

	    		displayGreeting(); // Calls Greeting function
	    	}

	    	function displayGreeting () {
	    	var user_name = localStorage.getItem("user_name");
	    	var menuGreeting = document.getElementById("add-name");
			//user_name = (typeof user_name === "undefined") ? "" : user_name;
		    	if (user_name && user_name !== "null"){
		    		// alert(user_name);
		    		menuGreeting.innerHTML = 'Hi ' + user_name + '!';
		    	} else {  // if localstorage doesn't exist on the browser.
		    		menuGreeting.innerHTML = 'Greetings!';
		    	}
	    	}
		} else {
		  // no native support for HTML5 storage :(
		  // maybe try dojox.storage or a third-party solution
	    	document.getElementById("add-name").style.display = "none";
		} 
</script>
    <script type="text/javascript">
    /* Toggles Tabs */
    		var value = "<?php echo $jsPage; ?>";
    	function showPageContent() {
    		var homeTab = document.getElementById("home-tab");
    		var internalTab = document.getElementById("internal-tab");
    		var externalTab = document.getElementById("external-tab");
    		if (value === "home") {
	    		homeTab.classList.add("active");
	    		internalTab.classList.remove("active");
	    		externalTab.classList.remove("active");

    		} else if (value === "internal") {
	    		homeTab.classList.remove("active");
	    		internalTab.classList.add("active");
	    		externalTab.classList.remove("active");

    		} else if (value === "external") {
	    		homeTab.classList.remove("active");
	    		internalTab.classList.remove("active");
	    		externalTab.classList.add("active");

	    	} else {
	    		homeTab.classList.add("active");
	    		internalTab.classList.remove("active");
	    		externalTab.classList.remove("active");
	    	}
		}
    </script>
</head>
<body onload="showPageContent();displayGreeting();">
<div class="container">
<header>
	<!-- Sliding Header Start -->
	<div class="row">
		<div class="col-xs-12" style="margin-top: 20px;">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	          <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
	          <li class="" data-target="#carousel-example-generic" data-slide-to="1"></li>
	          <li class="active" data-target="#carousel-example-generic" data-slide-to="2"></li>
	        </ol>
	        <div class="carousel-inner">
	          <div class="item">
	            <img src="custom-image/home-garden-flowers-and-beautiful-path-web-header.jpg" data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
	          </div>
	          <div class="item">
	            <img src="custom-image/house-illustration-header.jpg" data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
	          </div>
	          <div class="item active">
	            <img src="custom-image/nice-house-and-garden-header.jpg" data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
	          </div>
	        </div>
	        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	          <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	          <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	      </div>
		</div>
	<div>
	<!-- Sliding Header End -->
</header>
<nav>
<div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">TS Painting and Remodeling, INC.</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li id='home-tab' class="active"><a href="index.php">Home</a></li>
              <li id='internal-tab'><a href="internal-work.php">Internal Work</a></li>
              <li id='external-tab'><a href="external-work.php">External Work</a></li>
              <li style="vertical-align:bottom;"><a href="#" onclick="store_name();" id='add-name'>
              	Greetings!</a>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</nav>