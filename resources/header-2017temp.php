<?php
  // Redirect at end of diruption period
  if ($locationrd != null) {
    header("Location: $locationrd");
  }
?>

<!--	Copyright Chester-le-Street ASC 2017
		Designed and Built by Christopher Heppell, heppellit.com, chris.heppell@chesterlestreetasc.co.uk -->

<!DOCTYPE html>
<html lang="en-gb">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo htmlspecialchars($metadescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="apple-mobile-web-app-title" content="CLS Timetable">
    <meta name="author" content="">
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-78812259-2', 'auto');
	  ga('send', 'pageview');

	</script>

    <title><?php echo htmlspecialchars($pagetitle, ENT_QUOTES, 'UTF-8'); ?> - Chester-le-Street ASC</title>

    <!-- Bootstrap Core CSS -->
    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/css/chester.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link href="/resources/css/font-awesome.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="/resources/touchicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/resources/touchicons/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/resources/touchicons/apple-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/resources/touchicons/apple-touch-icon-ipad-retina.png">
    <link rel="mask-icon" href="https://static.chesterlestreetasc.co.uk/global/browserimages/chesterIcon.svg" color="#bd0000">

    <!-- Custom CSS -->
    <style>
    body{padding-top:70px}
	.castleview {color:#4527a0}
	.consett {color:#004d40}
	.birtley {color:#cc2c00}
	.durham {color:#f9a825}
	.stanley {color:#01579b}
	.crossfitCLS {color:#ba0c2f}
	.TOP {padding:40px 0 30px 0;margin-top:-20px;margin-bottom:20px;text-shadow: 1px 1px 3px rgba(0,0,0,.2);}
	.TOP h1 {color:#FFF}
	.TOPchesterRed {background:#bd0000;background-image: -webkit-gradient(linear,left top,left bottom,from(#a40000),to(#bd0000));background-image: -webkit-linear-gradient(top,#a40000 0,#bd0000 100%);background-image: linear-gradient(to bottom,#a40000 0,#bd0000 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#a40000', endColorstr='#bd0000', GradientType=0);background-repeat: repeat-x;color:#ffffff}
	.TOPcastleview {background:#4527a0;color:#ffffff}
	.TOPconsett {background:#004d40;color:#ffffff}
	.TOPbirtley {background:#cc2c00;color:#ffffff}
	.TOPdurham {background:#f9a825;color:#ffffff}
	.TOPstanley {background:#01579b;color:#ffffff}
	.TOPcrossfitCLS {background:#ba0c2f;color:#ffffff}
	.TOP a {color:#fff;text-decoration:underline}
	.TOP a:hover {color:#fff;text-decoration:underline}
	.TOP a:active {color:#fff;text-decoration:underline}
	.lead {font-weight:400}
	.white{color:#FFFFFF}

    .navbar-toggle {position: relative;float: right;padding: 9px 10px;margin-top: 8px;margin-right: 15px;margin-bottom: 8px;background-color: transparent;background-image: none;border: 1px solid transparent;}

    .navbar .dropdown-menu{border:none}

	@media print {
		a[href]:after {
			content: none !important;
		}
	}
	.btn-mail{background:#333;color:#FFF}.btn-mail:hover{color:#FFF}.btn-mail:active{color:#FFF}.btn-mail:focus{color:#FFF}

	</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-<?php echo htmlspecialchars($navcolour, ENT_QUOTES, 'UTF-8'); ?> navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Chester-le-Street ASC</a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#disruptionnavbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
            </div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="disruptionnavbar">
				<p class="navbar-text">Information about Changes to Training</p>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="/">Home</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select a Squad <i class="fa fa-caret-down" aria-hidden="true"></i></a>
				  <ul class="dropdown-menu">
					<li><a href="/squads/ab1">A &amp; B1</a></li>
					<li><a href="/squads/b2">B2</a></li>
					<li><a href="/squads/b3">B3</a></li>
					<li><a href="/squads/c">C</a></li>
					<li><a href="/squads/d">D</a></li>
					<li><a href="/squads/e">E</a></li>
					<li><a href="/squads/smallpool">Tadpoles, Frogs and Dolphins</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select a Pool <i class="fa fa-caret-down" aria-hidden="true"></i></a>
				  <ul class="dropdown-menu">
					<li><a href="/venues/birtley">Birtley</a></li>
					<li><a href="/venues/castleview">Castleview Academy</a></li>
					<li><a href="/venues/consett">Consett</a></li>
					<li><a href="/venues/durham">Freeman's Quay</a></li>
					<li><a href="/venues/stanley">The Louisa Centre</a></li>
					<li><a href="/venues/crossfitCLS">CrossFit CLS</a></li>
				  </ul>
				</li>
				<li><a href="https://www.chesterlestreetasc.co.uk/" target="_parent">Main Site</a></li>
			</ul>
			</div><!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="homepage-masthead homepage-alert d-print-none" style="margin:-20px 0 1.1rem 0">
      <div class="container">
        <p class="h3" style="color:#fff;margin-top:0">These pages will be going away soon</p>
        <p>We'll be returning to Chester-le-Street Leisure Centre after Christmas and we'll be closing down this site. Don't worry if you have any bookmarks to these pages - We'll redirect you automatically to the new content automatically.</p>
      </div>
    </div>

	<div class="row visible-print-block" style="margin-top:-50px"><div class="col-xs-12"><img class="img-responsive logo" style="display: inline;" src="https://static.chesterlestreetasc.co.uk/global/img/chesterLogo.svg"  alt="Chester-le-Street ASC Logo"></div></div>
