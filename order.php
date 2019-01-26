<?php
	
	error_reporting(E_ALL);
	
	require_once 'includes/db_con.php';
	require_once 'includes/functions.php';
	$msg = "";
	if(isset($_POST['submitPaper'])){
		$required_fields = array("type" => "Paper Type", "subject" => "Subject", "title" => "Title", 
		                         "academic_level" => "Academic Level", "pages" => "Pages", 
								 "style" => "Style", "language" => "Language", "deadline" => "Deadline", 
							     "no_of_sources" => "Number of Sources", "instructions" => "Instructions", 
								 "fname" => "First Name", "lname" => "Last Name", "email" => "Email", 
								 "c_email" => "Confirm Email", "cell_no" => "Mobile Number", 
								 "country" => "Country"
							);
		$errors = array();
		
		foreach($required_fields as $field => $detail){
			if(!isset($_POST[$field]) || empty($_POST[$field])){
				$errors[] = $detail;
			}
		}
		
		if(empty($errors)){
			$type = $_POST['type'];
			$subject = $_POST['subject'];
			$title = $_POST['title'];
			$academic_level = $_POST['academic_level'];
			$pages = $_POST['pages'];
			$style = $_POST['style'];
			$language = $_POST['language'];
			$deadline = $_POST['deadline'];
			$no_of_sources = $_POST['no_of_sources'];
			$instructions = $_POST['instructions'];
			$price = $_POST['real_price'];
			
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$c_email = $_POST['c_email'];
			$cell_no = $_POST['cell_no'];
			$country = $_POST['country'];
			$time_zone = $_POST['time_zone'];
			
			
			$type = getTypeOfPaper($type);
			
			$deadline = getDeadlineOfPaper($deadline);
			
			$time_zone = getTimeZone($time_zone);
			
			$academic_level = getAcademicLevel($academic_level);
			
			if($email == $c_email){
				//emails match
				$query = "INSERT INTO client_info(fname,lname,email,mobile,country,time_zone) VALUES(?, ?, ?, ?, ?, ?)";
			
				$statement = $connection->prepare($query);
				$statement->bind_param('ssssss', $fname, $lname, $email, $cell_no, $country, $time_zone);
				
				if($statement->execute()){
					$client_id = mysqli_insert_id($connection);
							
					$query = "INSERT INTO essay_order(subject,title,type,pages,style,language,deadline,sources,instructions,email,level,client_id,price) 
									 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
					$statement1 = $connection->prepare($query);
					$statement1->bind_param('sssssssssssss', $subject, $title, $type, $pages, $style, $language, $deadline, $no_of_sources, $instructions, $email, $academic_level, $client_id,$price );
					if($statement1->execute()){
						$query = "SELECT Essay_id FROM essay_order WHERE email = '$email' ORDER BY date_added DESC LIMIT 1";
						$statement2 = $connection->prepare($query);
						
						if($statement2->execute()){
							$statement2->store_result();
							if($statement2->num_rows > 0){
								$statement2->bind_result($essay_id);
								while($statement2->fetch()){
									$essay_id = $essay_id;
								}
								
								
								$emailSubject = 'Essay Order #' . $essay_id . ', Due : ' . $deadline ;
								$emailMessage = 'Client : ' . $fname . ' ' .$lname . ' \n
												 email : ' . $email . ' \n
												 Title of paper : '. $title .' \n
												 Type of paper : '. $type .' \n
												 Subject : '. $subject .' \n
												 Academic level : '. $academic_level .' \n
												 Pages : '. $pages .' \n
												 Paper style : '. $style .' \n
												 Language : '. $language .' \n
												 Deadline : '. $deadline .' \n
												 No of Sources : '. $no_of_sources .' \n
												 Instructions : '. $instructions .' \n
												';
								$emailMessage = wordwrap($emailMessage,70);
								if(!$status = mail('edward@essaypremier.com',$emailSubject , $emailMessage)){
									die('mail not sent');
								}		
								header("Location: order_details.php?id=" . $essay_id . "");
								
							}
							else{
								$msg = '<script>alert("essay id not found")</script>';
							}
						}
						
						else{
							$msg = '<script>alert("failed to select essay id")</script>';
						}
					}
					
					else{
						$msg = '<script>alert("failed to insert essay order")</script>';
					}				
				}
				
				else{
					$msg = '<script>alert("failed to insert client info")</script>';
				}
			}
			else{
				// emails dont match
				
				$msg = '<script>alert("Please ensure that the emails match")</script>';
			}
		}
		else{
			$msg = '<script>alert(" Please fill in the following field(s) before proceeding : '. implode(' , ', $errors) .'")</script>';
		}
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

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/creative.css" type="text/css">

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
	<?php echo $msg;?>
	<section class="bg-primary" id="how">
		<div class="container">
			<div class="row">
				<div class = "col-lg-9 col-md-12 col-sm-12 col-xs-12 fieldset">
					<div class = "row">
						<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="alert alert-success" role="alert" style = "margin:25px 0;">
								<div class = "active_price" style = "font-size:2.5em;"></div>
							</div>
						</div>
						
						<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Order Form </h2><br />
						</div>
						
						<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<form method = "post" id = "order_form" action = "">
								<div class = "row">
									<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class = "form-group">
											<label for = "type">Type Of Paper</label>
											<select class = "form-control" name = "type" id = "type">
												<option  value="1" selected>Essay (any type)</option>
												<option  value="1.5">Outline</option>
												<option  value="1.8">Literature Review</option>
												<option  value="1.5">Dissertation Proposal</option>
												<option  value="1.5">Dissertation</option>
												<option  value="1.9">Coursework</option>
												<option  value="0.9">Assignment</option>
												<option  value="0.6">Editing</option>
												<option  value="0.6">Proofreading</option>
												<option  value="0.7">Paraphrasing</option>
												<option  value="1.8">Non-Word Assignment</option>
												<option  value="0.8">PowerPoint Presentation</option>
												<option  value="1.1">Admission/Application Essay</option>
												<option  value="1.1">Annotated Bibliography</option>
												<option  value="1.2">Article</option>
												<option  value="2.1">Case study</option>
												<option  value="0.7">Formatting</option>
												<option  value="2.3">Lab Report</option>
												<option  value="2.4">Math Problem</option>
												<option  value="1.8">Movie Review</option>
												<option  value="1.1">Personal Statement</option>
												<option  value="1.3">Research Paper</option>
												<option  value="1.8">Research Proposal</option>
												<option  value="1.2">Scholarship Essay</option>
												<option  value="1.1">Speech</option>
												<option  value="2">Statistics Project</option>
												<option  value="1.7">Term Paper</option>
											</select>
										</div>
										
										<div class = "form-group">
											<label for="subject">Subject</label>
											<select class="form-control" id="subject" name = "subject">
												<option  value=""  class="paper_type_" selected="selected"> --Select Subject-- </option>
												
												<optgroup label="Arts & Humanities">
													<option value="Visual Arts and Film Studies"> Visual Arts and Film Studies </option>
													<option value="Religion and Theology"> Religion and Theology </option>
													<option value="Philosophy"> Philosophy </option>
													<option value="History"> History </option>
													<option value="English"> English </option>
													<option value="Music"> Music </option>
													<option value="Literature"> Literature </option>
													<option value="Linguistics"> Linguistics </option>
													<option value="Ethics"> Ethics </option>
													<option value="Archaeology"> Archaeology </option>
													<option value="Anthropology"> Anthropology </option>
												</optgroup>
												
												<optgroup label="Social Sciences">
													<option value="Geography"> Geography </option>
													<option value="Psychology"> Psychology </option>
													<option value="Sociology"> Sociology </option>
													<option value="Gender & Sexual Studies"> Gender & Sexual Studies </option>
													<option value="Human Resources (HR)"> Human Resources (HR) </option>
													<option value="Journalism, mass media and communication"> Journalism, mass media and communication </option>
													<option value="Political Science"> Political Science </option>
												</optgroup>
												
												<optgroup label="Sciences">
													<option value="Biology"> Biology </option>
													<option value="Chemistry"> Chemistry </option>
													<option value="Physics (including Earth and space sciences)"> Physics (including Earth and space sciences) </option>
													<option value="Microbiology"> Microbiology </option>
													<option value="Astronomy"> Astronomy </option>
													<option value="Mathematics"> Mathematics </option>
													<option value="Statistics"> Statistics </option>
													<option value="Earth and Space sciences"> Earth and Space sciences </option>
												</optgroup>
												
												<optgroup label="Information Technology">
													<option value="Computer sciences and Information technology"> Computer sciences and Information technology </option>
													<option value="Logic and programming"> Logic and programming </option>
													<option value="Systems science"> Systems science </option>
												</optgroup>
												
												<optgroup label="Applied sciences">
													<option value="Agriculture"> Agriculture </option>
													<option value="Architecture"> Architecture </option>
													<option value="Design and Technology"> Design and Technology </option>
													<option value="Engineering and Construction"> Engineering and Construction </option>
													<option value="Environmental studies"> Environmental studies </option>
													<option value="Health sciences and medicine"> Health sciences and medicine </option>
													<option value="Education"> Education </option>
													<option value="Nursing"> Nursing </option>
													<option value="Military sciences"> Military sciences </option>
													<option value="Family and consumer science"> Family and consumer science </option>
												</optgroup>
												
												<optgroup label="Economics">
													<option value="Macro & Micro economics"> Macro & Micro economics </option>
													<option value="Business"> Business </option>
													<option value="Marketing"> Marketing </option>
													<option value="Management"> Management </option>
													<option value="Finance and Accounting"> Finance and Accounting </option>
													<option value="E-commerce"> E-commerce </option>
													<option value="Tourism"> Tourism </option>
													<option value="Logistics"> Logistics </option>
												</optgroup>
												
												<optgroup label="Law">
													<option value="Law"> Law </option>
												</optgroup>
												
												<optgroup label="Other">
													<option value="Creative writing"> Creative writing </option>
													<option value="Other"> Other </option>
												</optgroup>
											</select>
										</div>
										
										<div class = "form-group">
											<label for="exampleInputtitle">Title of the Paper</label>
											<input type="title" class="form-control" value = "<?php echo isset($title) ? $title: '';?>" name = "title" id="exampleInputtitle" placeholder="Enter Paper Title">
										</div>
										
										<div class = "form-group">
											<label for = "academic">Academic Level</label>
											<select class = "form-control" name = "academic_level" id = "academic">
												<option value = "1.0">GCSE, GNVQ, A-level, A2</option>
												<option value = "1.5" selected>Degree</option>
												<option value = "2.0">Masters</option>
											</select>
										</div>
										
										<div class = "form-group">
											<label for = "pages">Pages / Words</label>
											<select class = "form-control" name = "pages" id = "pages">
												<option value= 1  selected>1 page / 250 words</option>
												
												<?php 			
													for($count = 2; $count <= 200; $count++){
														if(isset($pages) && !empty($pages)){
															if($count == $pages){
																echo '<option value = "' . $count . '" selected>' . $count . ' pages / ' . $count * 250 . ' words</option>';
															}
															else{
																echo '<option value = "' . $count . '">' . $count . ' pages / ' . $count * 250 . ' words</option>';
															}
														}
														else{
															echo '<option value = "' . $count . '">' . $count . ' pages / ' . $count * 250 . ' words</option>';
														}
													}
												?>									
											</select>
										</div>
									</div>
									<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class = "form-group">
											<label for="style">Select Paper Style</label>
											<select class="form-control" name = "style" id="style">
												<option  value=""  class="paper_type_" disabled="disabled" selected="selected"> --Select style of the Paper-- </option>
												<option value = "APA"> APA </option>
												<option value = "MLA"> MLA</option>
												<option value = "Harvard"> Harvard</option>
												<option value = "Oxford"> Oxford </option>
												<option value = "OSCOLA"> OSCOLA </option>
											</select>
										</div>
										
										<div class = "form-group">
											<label for="lang">Language</label>
											<select class="form-control" name = "language" id="lang">
												<option  value = "" selected="selected"> --Select Language--</option>
												<option value  = "English (U.K.)"> English (U.K.)</option>
												<option value = "English (U.S.)"> English (U.S.)</option>
											</select>
										</div>
										
										<div class = "form-group">
											<label for = "deadline">Deadline</label>
											<select class = "form-control" name = "deadline" id = "deadline">
												<option value = "3.50">3 hrs</option>
												<option value = "3.25">12 hrs</option>
												<option value = "3.00">24 hrs</option>
												<option value = "2.75">2 Days</option>
												<option value = "2.50">3 Days</option>
												<option value = "2.25">4 Days</option>
												<option value = "2" selected>5 Days</option>
												<option value = "1.75">10 Days</option>
												<option value = "1.50">15 Days</option>
												<option value = "1.50">15-30 Days</option>
												<option value = "1.50">Over-30 Days</option>
											</select>
										</div>
										
										<div class = "form-group">
											<label for="no_of_sources">Number of Sources</label>
											<select class="form-control" name = "no_of_sources" id="no_of_sources">
												<option  value="" disabled="disabled" selected="selected"> --Select Number of Sources-- </option>
												<?php 
													for($count = 1;$count <= 100;$count++){
														if(isset($no_of_sources) && !empty($no_of_sources)){
															if($no_of_sources == $count){
																echo '<option value = "'. $count .'" selected>' . $count . '</option>';
															}
															
															else{
																echo '<option value = "'. $count .'">' . $count . '</option>';
															}
														}
														else{
															echo '<option value = "'. $count .'">' . $count . '</option>';
														}
													}
												?>
											</select>
										</div>
									</div>
									
									<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class = "form-group">
											<label for = "instructions">Order Instructions</label>
											<textarea name="instructions" style = "resize:none" class = "form-control" rows='5' id="instructions"></textarea>
										</div>
									</div>
									
									<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h3><u>Personal Information</u></h3>
									</div>
									
									<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class = "form-group">
											<label for="exampleInputFname">First Name</label>
											<input type="text" name = "fname" class="form-control" value = "<?php echo isset($fname) ? $fname : '';?>" id="exampleInputFname" placeholder="Enter Your First Name">
										</div>
										
										<div class = "form-group">
											<label for="exampleInputLname">Last Name</label>
											<input type="text" class="form-control" name = "lname" value = "<?php echo isset($lname) ? $lname : '';?>" id="exampleInputLname" placeholder="Enter Your Last Name">
										</div>
										
										<div class = "form-group">
											<label for="exampleInputEmail">Email</label>
											<input type="email" class="form-control" name = "email" value = "<?php echo isset($email) ? $email : '';?>" id="exampleInputEmail" placeholder="Enter Your Email">
										</div>
										
										<div class = "form-group">
											<label for="exampleInputCemail">Confirm Email</label>
											<input type="email" class="form-control" name = "c_email" value = "<?php echo isset($c_email) ? $c_email : '';?>" id="exampleInputCemail" placeholder="Confirm Your Email">
										</div>
									</div>
									
									<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class = "form-group">
											<label for="exampleInputMobile">Mobile Number</label>
											<input type="number" class="form-control" name = "cell_no" value = "<?php echo isset($cell_no) ? $cell_no : '';?>" id="exampleInputMobile" placeholder="Enter Your Mobile Number">
										</div>
										
										<div class = "form-group">
											<label for="country">Country</label>
											<select class="form-control" name = "country" id="country">
												<option value="4" >Afghanistan</option>
												<option value="5" >Albania</option>
												<option value="6" >Algeria</option>
												<option value="7" >American Samoa</option>
												<option value="8" >Andorra</option>
												<option value="9" >Angola</option>
												<option value="10" >Anguilla</option>
												<option value="11" >Antarctica</option>
												<option value="12" >Antigua and Barbuda</option>
												<option value="13" >Argentina</option>
												<option value="14" >Armenia</option>
												<option value="15" >Aruba</option>
												<option value="16" >Ascension Island</option>
												<option value="17" >Australia</option>
												<option value="18" >Austria</option>
												<option value="19" >Azberbaijan</option>
												<option value="20" >Bahamas</option>
												<option value="21" >Bahrain</option>
												<option value="22" >Bangladesh</option>
												<option value="23" >Barbados</option>
												<option value="25" >Belarus</option>
												<option value="26" >Belgium</option>
												<option value="27" >Belize</option>
												<option value="28" >Benin</option>
												<option value="29" >Bermuda</option>
												<option value="30" >Bhutan</option>
												<option value="31" >Bolivia</option>
												<option value="32" >Bosnia and Herzegovina</option>
												<option value="33" >Botswana</option>
												<option value="34" >Brazil</option>
												<option value="240" >British Indian Ocean Territory</option>
												<option value="35" >British Virgin Islands</option>
												<option value="36" >Brunei</option>
												<option value="37" >Bulgaria</option>
												<option value="38" >Burkina Faso</option>
												<option value="40" >Burundi</option>
												<option value="41" >Cambodia</option>
												<option value="42" >Cameroon</option>
												<option value="43" >Canada</option>
												<option value="241" >Canary Islands</option>
												<option value="44" >Cape Verde Islands</option>
												<option value="242" >Caribbean Netherlands</option>
												<option value="45" >Cayman Islands</option>
												<option value="46" >Central African Rep.</option>
												<option value="47" >Chad</option>
												<option value="48" >Chile</option>
												<option value="49" >China</option>
												<option value="50" >Christmas Island</option>
												<option value="52" >Colombia</option>
												<option value="53" >Comoros</option>
												<option value="54" >Congo</option>
												<option value="56" >Cook Islands</option>
												<option value="57" >Costa Rica</option>
												<option value="58" >Croatia</option>
												<option value="59" >Cuba</option>
												<option value="158" >Curacao</option>
												<option value="60" >Cyprus</option>
												<option value="61" >Czech Republic</option>
												<option value="117" >Democratic Peopleâ€™s Republic of Korea</option>
												<option value="55" >Democratic Republic of Congo</option>
												<option value="62" >Denmark</option>
												<option value="63" >DiegoGarcia</option>
												<option value="64" >Djibouti</option>
												<option value="65" >Dominica</option>
												<option value="66" >Dominican Rep.</option>
												<option value="243" >East Timor</option>
												<option value="67" >Ecuador</option>
												<option value="68" >Egypt</option>
												<option value="69" >El Salvador</option>
												<option value="70" >Equatorial Guinea</option>
												<option value="71" >Eritrea</option>
												<option value="72" >Estonia</option>
												<option value="73" >Ethiopia</option>
												<option value="74" >Faeroe Islands</option>
												<option value="75" >Falkland Islands</option>
												<option value="76" >Fiji Islands</option>
												<option value="77" >Finland</option>
												<option value="78" >France</option>
												<option value="80" >French Guiana</option>
												<option value="81" >French Polynesia</option>
												<option value="82" >Gabon</option>
												<option value="83" >Gambia</option>
												<option value="84" >Georgia</option>
												<option value="85" >Germany</option>
												<option value="86" >Ghana</option>
												<option value="87" >Gibraltar</option>
												<option value="88" >Greece</option>
												<option value="89" >Greenland</option>
												<option value="90" >Grenada</option>
												<option value="91" >Guadeloupe</option>
												<option value="92" >Guam</option>
												<option value="94" >Guatemala</option>
												<option value="95" >Guinea</option>
												<option value="96" >GuineaBissau</option>
												<option value="97" >Guyana</option>
												<option value="98" >Haiti</option>
												<option value="99" >Honduras</option>
												<option value="100" >HongKong</option>
												<option value="101" >Hungary</option>
												<option value="102" >Iceland</option>
												<option value="103" >India</option>
												<option value="104" >Indonesia</option>
												<option value="105" >Iran</option>
												<option value="106" >Iraq</option>
												<option value="107" >Ireland</option>
												<option value="108" >Israel</option>
												<option value="109" >Italy</option>
												<option value="110" >Ivory Coast</option>
												<option value="111" >Jamaica</option>
												<option value="112" >Japan</option>
												<option value="113" >Jordan</option>
												<option value="114" >Kazakhstan</option>
												<option value="115" >Kenya</option>
												<option value="51" >Kepulauan Cocos (Keeling)</option>
												<option value="116" >Kiribati</option>
												<option value="119" >Kuwait</option>
												<option value="120" >Kyrgyzstan</option>
												<option value="121" >Laos</option>
												<option value="122" >Latvia</option>
												<option value="123" >Lebanon</option>
												<option value="124" >Lesotho</option>
												<option value="125" >Liberia</option>
												<option value="126" >Libya</option>
												<option value="127" >Liechtenstein</option>
												<option value="128" >Lithuania</option>
												<option value="129" >Luxembourg</option>
												<option value="130" >Macau</option>
												<option value="131" >Macedonia</option>
												<option value="132" >Madagascar</option>
												<option value="133" >Malawi</option>
												<option value="134" >Malaysia</option>
												<option value="135" >Maldives</option>
												<option value="136" >Mali</option>
												<option value="137" >Malta</option>
												<option value="139" >Marshall Islands</option>
												<option value="140" >Martinique</option>
												<option value="141" >Mauritania</option>
												<option value="142" >Mauritius</option>
												<option value="143" >Mayotte</option>
												<option value="144" >Mexico</option>
												<option value="145" >Micronesia</option>
												<option value="146" >Midway Island</option>
												<option value="147" >Moldova</option>
												<option value="148" >Monaco</option>
												<option value="149" >Mongolia</option>
												<option value="239" >Montenegro</option>
												<option value="150" >Montserrat</option>
												<option value="151" >Morocco</option>
												<option value="152" >Mozambique</option>
												<option value="39" >Myanmar (Burma)</option>
												<option value="153" >Myanmar (Burma),</option>
												<option value="154" >Namibia</option>
												<option value="155" >Nauru</option>
												<option value="156" >Nepal</option>
												<option value="157" >Netherlands</option>
												<option value="161" >New Zealand</option>
												<option value="160" >NewCaledonia</option>
												<option value="162" >Nicaragua</option>
												<option value="163" >Niger</option>
												<option value="164" >Nigeria</option>
												<option value="165" >Niue</option>
												<option value="166" >Norfolk Island</option>
												<option value="138" >Northern Mariana Islands</option>
												<option value="167" >Norway</option>
												<option value="168" >Oman</option>
												<option value="169" >Pakistan</option>
												<option value="170" >Palau</option>
												<option value="171" >Palestine</option>
												<option value="172" >Panama</option>
												<option value="173" >Papua New Guinea</option>
												<option value="174" >Paraguay</option>
												<option value="175" >Peru</option>
												<option value="176" >Philippines</option>
												<option value="177" >Poland</option>
												<option value="178" >Portugal</option>
												<option value="179" >Puerto Rico</option>
												<option value="180" >Qatar</option>
												<option value="118" >Republic of Korea</option>
												<option value="181" >ReunionIsland</option>
												<option value="182" >Romania</option>
												<option value="183" >Russia</option>
												<option value="184" >Rwanda</option>
												<option value="244" >Saint Barthelemy</option>
												<option value="185" >Saint Helena</option>
												<option value="186" >Saint Kitts and Nevis</option>
												<option value="187" >Saint Lucia</option>
												<option value="188" >Saint Perre & Miquelon</option>
												<option value="189" >Saint Vincent & Grenadines</option>
												<option value="245" >Saint-Martin</option>
												<option value="190" >San Marino</option>
												<option value="191" >Sao Tome & Principe</option>
												<option value="192" >Saudi Arabia</option>
												<option value="193" >Senegal</option>
												<option value="194" >Serbia</option>
												<option value="195" >Seychelles</option>
												<option value="196" >Sierra Leone</option>
												<option value="197" >Singapore</option>
												<option value="246" >Sint Maarten</option>
												<option value="198" >Slovakia</option>
												<option value="199" >Slovenia</option>
												<option value="200" >Solomon Islands</option>
												<option value="201" >Somalia</option>
												<option value="202" >SouthAfrica</option>
												<option value="203" >Spain</option>
												<option value="204" >Sri Lanka</option>
												<option value="205" >Sudan</option>
												<option value="206" >Suriname</option>
												<option value="207" >Swaziland</option>
												<option value="208" >Sweden</option>
												<option value="209" >Switzerland</option>
												<option value="210" >Syria</option>
												<option value="211" >Taiwan</option>
												<option value="212" >Tajikistan</option>
												<option value="213" >Tanzania</option>
												<option value="214" >Thailand</option>
												<option value="215" >Togo</option>
												<option value="247" >Tokelau</option>
												<option value="216" >Tonga</option>
												<option value="217" >Trinidad & Tobago</option>
												<option value="218" >Tunisia</option>
												<option value="219" >Turkey</option>
												<option value="220" >Turkmenistan</option>
												<option value="221" >Turks & Caicos</option>
												<option value="222" >Tuvalu</option>
												<option value="223" >Uganda</option>
												<option value="224" >Ukraine</option>
												<option value="225" >United Arab Emirates</option>
												<option value="3" selected>United Kingdom</option>
												<option value="226" >Uruguay</option>
												<option value="2" >US Virgin Islands</option>
												<option value="1" >USA</option>
												<option value="227" >Uzbekistan</option>
												<option value="228" >Vanuatu</option>
												<option value="229" >VaticanCity</option>
												<option value="230" >Venezuela</option>
												<option value="231" >Vietnam</option>
												<option value="232" >WakeIsland</option>
												<option value="233" >Wallis & Futuna</option>
												<option value="234" >Western Samoa</option>
												<option value="235" >Yemen</option>
												<option value="237" >Zambia</option>
												<option value="238" >Zimbabwe</option>
											</select>
										</div>
										
										<div class = "form-group">
											<label for="time_zone">Time Zone</label>
											<select class="form-control" name = "time_zone" id="time_zone">
												<option value='-12'>GMT -12 Hours</option>
												<option value='-11'>GMT -11 Hours</option>
												<option value='-10'>GMT -10 Hours</option>
												<option value='-9'>GMT -9 Hours</option>
												<option value='-8'>GMT -8 Hours</option>
												<option value='-7'>GMT -7 Hours</option>
												<option value='-6'>GMT -6 Hours</option>
												<option value='-5'>GMT -5 Hours</option>
												<option value='-4'>GMT -4 Hours</option>
												<option value='-3'>GMT -3 Hours</option>
												<option value='-2'>GMT -2 Hours</option>
												<option value='-1'>GMT -1 Hour</option>
												<option selected value='0'>GMT</option>
												<option value='1'>GMT +1 Hour</option>
												<option value='2'>GMT +2 Hours</option>
												<option value='3'>GMT +3 Hours</option>
												<option value='4'>GMT +4 Hours</option>
												<option value='5'>GMT +5 Hours</option>
												<option value='6'>GMT +6 Hours</option>
												<option value='7'>GMT +7 Hours</option>
												<option value='8'>GMT +8 Hours</option>
												<option value='9'>GMT +9 Hours</option>
												<option value='10'>GMT +10 Hours</option>
												<option value='11'>GMT +11 Hours</option>
												<option value='12'>GMT +12 Hours</option>
											</select>
										</div>
										
										<div class = "form-group">
											<input type = "hidden" value = "" name = "real_price" class = "real_price">
											<input type = "submit" class="btn pull-right btn-info btn-lg" id = "submitPaper" name = "submitPaper" value = "SUBMIT THE PAPER" style = "margin:20px auto 0 auto;width:100%" />
										</div>
									</div>
									
									<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
										<div class="alert alert-success" role="alert" style = "margin:25px 0;">
											<div class = "active_price" style = "font-size:2.5em;"></div>
										</div>
									</div>
								</div>
							</form>
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
                    <p>+452296136</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:support@essaypremier.com">support@essaypremier.com</a></p>
                </div>
            </div>
        </div>
    </section>
	
	<div class = "static_price"></div>

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
