<!doctype html>
<html>
	<head>
		<title>
			<?php 
				/*
				if(isset($name)&& $name == "HOME"){echo "Writing | Home";}
				if(isset($name)&& $name == "confirm"){echo "Voters Lounge | Confirm Registration";}
				if(isset($name)&& $name == "vote"){echo "Voters Lounge | Vote";}
				if(isset($name)&& $name == "results"){echo "Voters Lounge | Results";}
				if(isset($name)&& $name == "register"){echo "Voters Lounge | Register Voter";} 
				*/
			?>
			Writing
		</title>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1" />
		<link rel = "Shortcut Icon" type = "Image/X-icon" href = "favicon.ico" />
		<link rel = "stylesheet" type = "text/css" media = "screen" href = "css/style.css" />
		<link rel = "stylesheet" type = "text/css" media = "screen" href = "css/font-awesome.css" />
		<link rel = "stylesheet" type = "text/css" media = "screen" href = "css/theme.css" />
		<link rel = "stylesheet" type = "text/css" media = "screen" href = "css/styles.css" />
		<link rel = "stylesheet" type = "text/css" media = "screen" href = "css/jquery-ui.min.css" />
		<link rel = "stylesheet" type = "text/css" media = "screen" href = "css/jquery-ui.structure.min.css" />
		<link rel = "stylesheet" type = "text/css" media = "screen" href = "css/jquery-ui.theme.min.css" />
		<script type = "text/javascript" language = "Javascript" src = "js/jquery.js"></script>
		<script type = "text/javascript" language = "Javascript" src = "js/main_functions.js"></script>
		<script type = "text/javascript" language = "Javascript" src = "js/jquery-ui.min.js"></script>
		<script src="js/essay.js"></script>
		<script type = "text/javascript" language = "Javascript">
			function show_confirm(){
				var r = confirm("This cannot be undone, continue?");
				if(r == true){
					return true;
				}
				else{
					return false;
				}
			}
		</script>
		<script> 
		    $(function(){
				 
			}); 
		</script> 
	</head>
	<body>
		<div class = "container">
			<nav class = "navbar navbar-custom navbar-fixed-top">
				<div class = "navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="index.php" title = "Essay solutions home"><img src = "images/title3.png" class = "img-responsive" style ="height:30px;width:auto;"></a><a href = "#" class = "navbar-brand"></a>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
					<ul class="nav navbar-nav"> 
						<li <?php if(isset($name)&& $name == "index"){echo "class=\"active\"";}?>><a href="index.php">HOME <span class = "fa fa-home"></span></a></li> 
						<li <?php if(isset($name)&& $name == "how"){echo "class=\"active\"";}?>><a href="how.php">HOW IT WORKS <span class = "fa fa-info"></span></a></li> 
						<li <?php if(isset($name)&& $name == "get"){echo "class=\"active\"";}?>><a href="get.php"><span class = "blink">BUY ESSAY <span class = "glyphicon glyphicon-gbp"></span></span></a></li> 
						<li <?php if(isset($name)&& $name == "why"){echo "class=\"active\"";}?>><a href="why.php">WHY US <span class = "fa fa-list"></span></a></li>
						<li <?php if(isset($name)&& $name == "connect"){echo "class=\"active\"";}?>><a href="connect.php">CONNECT WITH US <span class = "fa fa-phone"></span></a></li> 
					</ul>
					<ul class = "navbar-right nav navbar-nav">
						<li><span id = "tarehe" class = "navbar-text" style = "font-size:0.8em; padding-right:20px;"></span></li>
						<?php if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])){echo "<li style = \"padding-right:20px;\"><a href = \"logout.php\">Logout " . $_SESSION['username']. " ". "<img style = \"width:20px; height:auto; \" src = \"" . $_SESSION['img_url'] . "\" /></a></li>";}?>
					</ul>
				</div>
			</nav>
		</div>