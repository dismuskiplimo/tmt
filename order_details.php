<?php
	require_once 'includes/db_con.php';
	isset($_GET['id']) && !empty($_GET['id']) ? : header("Location: index.php");
	$id = $_GET['id'];
	
	$query = "SELECT Essay_id,Title,Email,Subject,Type,Pages,Style,Language,Deadline,Sources, Instructions, Price, Level, date_added FROM essay_order WHERE Essay_id = '$id'";
	
	$statement = $connection->prepare($query);
	if($statement->execute()){
		$statement->store_result();
		if($statement->num_rows > 0){
			$statement->bind_result($essay_id,$title,$email,$subject,$type,$pages,$style,$language,$deadline,$sources,$instructions,$price,$level,$date_added);
			while($statement->fetch()){
				$essay_id = $essay_id;
				$title = $title;
				$email = $email;
				$subject = $subject;
				$type = $type;
				$pages = $pages;
				$style = $style;
				$language = $language;
				$deadline = $deadline;
				$sources = $sources;
				$instructions = $instructions;
				$price = $price;
				$level = $level;
				$date_added = $date_added;
			}
			
			$query = "SELECT Fname,Lname,Mobile,Time_zone FROM client_info WHERE email = '$email'";
			$statement1 = $connection->prepare($query);
			if($statement1->execute()){
				$statement1->store_result();
				if($statement1->num_rows > 0){
					$statement1->bind_result($fname,$lname,$mobile,$time_zone);
					while($statement1->fetch()){
						$fname = $fname;
						$lname = $lname;
						$mobile = $mobile;
						$time_zone = $time_zone;
					}
				}
				
				else{
					die('user not found');
				}
			}
			
			else{
				die('error selecting client info');
			}
			
			
		}
		
		else{
			die('page not found');
		}
	}
	
	else{
		die('error selecting essay order');
	}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Essay Premier</title>
	<link rel = "Shortcut Icon" type = "Image/X-icon" href = "favicon.ico"/>
	<!--javascript-->
	<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
	<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
		});
	};
</script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src = "img/title4.png" class = "img-responsive" style ="height:30px;width:auto;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<section class="bg-primary" id="how">
		<div class="container">
			<div class="row">
				<div class = "col-lg-9 fieldset">
					<div class = "col-lg-12 text-center">
						<div class="alert alert-success" role="alert" style = "margin:25px 0;">
							<div class = "active_prices" style = "font-size:2.5em;">$ <?php echo $price;?></div>
						</div>
						<h2>Order Details</h2><br />
					</div>
					
					<div class = "col-lg-12">
					<table class = "table table-bordered table-condensed">
						<tr>
							<td>
								<label for="title">Essay ID</label>
							</td>
							
							<td>
								<?php echo $essay_id?>
							</td>
						</tr>
						<tr>
							<td>
								<label for="title">First Name</label>
							</td>
							
							<td>
								<?php echo $fname?>
							</td>
						</tr>
						<tr>
							<td>
									<label for="title">Last Name</label>
							</td>
							<td>
								<?php echo $lname?>
							</td>
						</tr>
						<tr>
							<td>
								<label for="title">Email</label>
							</td>
							
							<td>
								<?php echo $email?>
							</td>
						</tr>
						<tr>
							<td>
								<label for="title">Mobile Number</label>
							</td>
							
							<td>
								<?php echo $mobile?>
							</td>
						</tr>
						
						<tr>
							<td>
								<label>Type Of Paper</label>
							</td>
							<td>
								<?php echo $type?>
							</td>
						</tr>
							<tr>
							
							<td><label for="subject">Subject</label></td>
							
							<td>
								<?php echo $subject?>
							</td>
						</tr>
						
						<tr>
							<td><label for="title">Title of the Paper</label></td>
							
							<td>
								<?php echo $title?>
							</td>
						</tr>
						<tr>
							<td>
								<label>Academic Level</label>
							</td>
							<td>
								<?php echo $level?>
							</td>
						</tr>
						<tr>
							<td>
								<label>Pages</label>
							</td>
							<td>
								<?php echo $pages?>
							</td>
						</tr>
						<tr>
							<td>
								<label for="subject">Paper Style</label>
							</td>
							
							<td>
								<?php echo $style?>
							</td>
						</tr>
						<tr>
							<td>
								<label for="lang">Language</label>
							</td>
							
							<td>
								<?php echo $language?>
							</td>
						</tr>
						<tr>
							<td>
								<label>Deadline</label>
								<!--<label for="raddress" style="margin-bottom:5px;">Required On </label><br />-->
							</td>
							
							<td>
								<?php echo $deadline?>
								<!--<input type="text" class = "form-control" id="inputField" name="requiredon" style="width:100%; border-radius:5px;color:#000;"/>-->
							</td>
						</tr>
						<!--&nbsp;:-->
						<tr>
							<td>
								<label for="subject">Number of Sources</label>
							</td>
							
							<td>
								 <?php echo $sources?>
							</td>
						</tr>
						<tr>
							<td>
								<label>Instructions</label>
							</td>
							
							<td>
								<?php echo nl2br($instructions)?>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td style = "text-align:center">
								<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="Q2NCF6MTKFK7U">
									
									<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>-->
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
									<input type="hidden" name="merchant" value="eddie23297@yahoo.com">
									<input type="hidden" name="cmd" value="_xclick">
									<input type="hidden" name="item_name" value="Essay Premier Services">
									<input type="hidden" name="amount" value="<?php echo $price;?>">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value="http://www.essaypremier.com/paypal_success.php">
									<input type="hidden" name="cancel_return" value="http://www.essaypremier.com/paypal_cancel.php">
									
									
									<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</td>
						</tr>
					</table>
					</div>
					
					<div class = "col-lg-12 text-center">
						<div class="alert alert-success" role="alert" style = "margin:25px 0;">
							<div class = "active_prices" style = "font-size:2.5em;">$ <?php echo $price;?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Connect With Us!</h2>
                    <hr class="primary">
                    <p>
						24/7 Support Services. Call/Text/Email At any Time!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>+45228996136</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">support@essaypremier.com</a></p>
                </div>
            </div>
        </div>
    </section>
	
	<div class = "static_prices">$ <?php echo $price;?></div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/essay.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
