<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

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
    /* Toggles Tabs */
    		var value = "<?php echo $jsPage; ?>";
    	function showPageContent() {
    		var homeTab = document.getElementById("home-tab");
    		var internalTab = document.getElementById("internal-tab");
    		var externalTab = document.getElementById("external-tab");
    		if (value === "home") {
	    		//homeElement.style.display = "inline";
	    		homeTab.classList.add("active");
	    		//internalElement.style.display = "none";
	    		internalTab.classList.remove("active");
	    		//externalElement.style.display = "none";
	    		externalTab.classList.remove("active");

    		} else if (value === "internal") {
	    		//homeElement.style.display = "none";
	    		homeTab.classList.remove("active");
	    		//internalElement.style.display = "inline";
	    		internalTab.classList.add("active");
	    		//externalElement.style.display = "none";
	    		externalTab.classList.remove("active");

    		} else if (value === "external") {
	    		//homeElement.style.display = "none";
	    		homeTab.classList.remove("active");
	    		//internalElement.style.display = "none";
	    		internalTab.classList.remove("active");
	    		//externalElement.style.display = "inline";
	    		externalTab.classList.add("active");

	    	} else {
	    		//homeElement.style.display = "inline";
	    		homeTab.classList.add("active");
	    		//internalElement.style.display = "none";
	    		internalTab.classList.remove("active");
	    		//externalElement.style.display = "none";
	    		externalTab.classList.remove("active");
	    	}
		}
    </script>
</head>
<body onload="showPageContent();">
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
	            <img src="custom-image/sunflowers-header.jpg" data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
	          </div>
	          <div class="item">
	            <img src="custom-image/fireworks-header.jpg" data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
	          </div>
	          <div class="item active">
	            <img src="custom-image/global-header.jpg" data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
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
            <a class="navbar-brand" href="#">TS Painting and Remodeling, INC.</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li id='home-tab' class="active"><a onclick="showPageContent('home-content')" href="index.php">Home</a></li>
              <li id='internal-tab'><a onclick="showPageContent('internal-content')" href="internal-work.php">Internal Work</a></li>
              <li id='external-tab'><a onclick="showPageContent('external-content')" href="external-work.php">External Work</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</nav>