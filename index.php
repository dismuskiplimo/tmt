<?php
	require_once 'includes/db_con.php';
	
	$ip_address = $_SERVER['REMOTE_ADDR'];
	
	$query = "SELECT ip_address FROM clicks WHERE ip_address = ?";
	$statement = $connection->prepare($query);
	$statement->bind_param('s', $ip_address);
	if($statement->execute()){
		$statement->store_result();
		
		if($statement->num_rows == 0){
			$query = "INSERT INTO clicks(ip_address) VALUES(?)";
			$stat = $connection->prepare($query);
			$stat->bind_param('s', $ip_address);
			if(!$stat->execute()){
				die(mysqli_error($connection));
			}
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

    <title>
		Essay Premier
	
	</title>

    <!-- Bootstrap Core CSS -->
    <link rel = "Shortcut Icon" type = "Image/X-icon" href = "favicon.ico"/>
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
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-72911852-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
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
                <a class="navbar-brand page-scroll" href="#page-top"><img src = "img/title3.png" class = "img-responsive" style ="height:30px;width:auto;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#how">How It Works</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#why_us">Why Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#order_essay" data-toggle = "modal" data-target = "#calculate">Order Essay</a>
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

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Your Best essay writing website</h1>
                <hr>
                <p>CUSTOMER IS OUR FIRST PRIORITY.</p>
                <a class="btn btn-primary btn-xl page-scroll" href="" data-toggle = "modal" data-target = "#calculate">place your order</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="how">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">HOW ESSAY PREMIER WORKS</h2>
                    <hr class="light">
                    <p>When you place your order, we review your requirements and assign the most suitable writer to work on it. You instantly get a notification and can be sure the work on your essay has started. To check the progress and ask for modifications, you can message your writer directly from your private Customer Area.
						<p>The writer researches your topic, using credible sources and the ones you specifically asked for. You can be sure all sources will be correctly referenced, and your paper will be formatted according to the style you need (Harvard, Turabian, APA, or any other). Your writer will custom-write your paper, following your instructions and language requirements.</p>
					<p>As soon as the order is completed, you get a notification again, and can download your great paper on the same day. With a free Title page and References page included, your custom essay is ready for submission: just look through and hand it in!</p>
					</p>
                    <a href="#" class="btn btn-default btn-xl">Start Now</a>
                </div>
            </div>
        </div>
    </section>

    <section id="why_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">WHY YOU SHOULD CHOOSE US?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Affordable prices</h3>
                        <p class="text-muted">We can assure that our prices match perfectly with the quality of our research paper.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-key wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Privacy</h3>
                        <p class="text-muted">Using our service is safe and confidential for you</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>On-Time Delivery</h3>
                        <p class="text-muted">We have well trained writers who really knows how to write essays.With this you receive your paper on time or even earlier.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-money wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Money Back</h3>
                        <p class="text-muted">You get the money back if you are not satisfied</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-dark" id="order_essay">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>WHAT ARE YOUR WAITING WHEN YOU HAVE ALL YOU NEED FOR YOUR SCHOOL ASSIGMENT???</h2>
                <a class="btn btn-default btn-xl wow tada" data-toggle = "modal" data-target = "#calculate">Place Your Order Now</a>
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
                    <p><a href="mailto:your-email@your-domain.com">support@essaypremier.com</a></p>
                </div>
            </div>
        </div>
    </section>
	
	<!--form-->
	<div class = "modal fade" id = "calculate">
		<div class = "modal-dialog">
			<div class = "modal-content">
				<div class = "modal-header">
					<button class = "close" style = "float:right;" type = "button" data-dismiss = "modal">&times;</button>
					<h2>Your Bill</h2>
				</div>
				<form action = "#" method = "post">
					<div class = "modal-body">
						<form name = "" id = "" action = "" method = "post" style = "padding-top:80px; width:100px;">
							<label for="title">Email</label>
							<input type="Email" class="form-control" id="exampleInputEmail" placeholder="Enter Your Email">
							
							<label>Academic Level</label>
							<select class = "form-control" name = "" id = "academic">
								<option value = "1.0">GCSE, GNVQ, A-level, A2</option>
								<option value = "1.5" selected>Degree</option>
								<option value = "2.0">Masters</option>
							</select>
							
							<label>Pages/Words</label>
							<select class = "form-control" name = "" id = "pages">
								<!--<option value = "1" selected>1 pages</option>
								<option value = "2">2 pages</option>
								<option value = "3">3 pages</option>-->
								<option value= "1" selected>1 page / 250 words</option>
								<option value= 2>2 pages / 500 words</option>
								<option value=3 >3 pages / 750 words</option>
								<option value=4>4 pages / 1000 words</option>
								<option value=5>5 pages / 1250 words</option>
								<option value=6>6 pages / 1500 words</option>
								<option value=7>7 pages / 1750 words</option>
								<option value=8>8 pages / 2000 words</option>
								<option value=9>9 pages / 2250 words</option>
								<option value=10>10 pages / 2500 words</option>
								<option value=11>11 pages / 2750 words</option>
								<option value=12>12 pages / 3000 words</option>
								<option value=13>13 pages / 3250 words</option>
								<option value=14>14 pages / 3500 words</option>
								<option value=15>15 pages / 3750 words</option>
								<option value=16>16 pages / 4000 words</option>
								<option value=17>17 pages / 4250 words</option>
								<option value=18>18 pages / 4500 words</option>
								<option value=19>19 pages / 4750 words</option>
								<option value=20>20 pages / 5000 words</option>
								<option value=21>21 pages / 5250 words</option>
								<option value=22>22 pages / 5500 words</option>
								<option value=23>23 pages / 5750 words</option>
								<option value=24>24 pages / 6000 words</option>
								<option value=25>25 pages / 6250 words</option>
								<option value=26>26 pages / 6500 words</option>
								<option value=27>27 pages / 6750 words</option>
								<option value=28>28 pages / 7000 words</option>
								<option value=29>29 pages / 7250 words</option>
								<option value=30>30 pages / 7500 words</option>
								<option value=31>31 pages / 7750 words</option>
								<option value=32>32 pages / 8000 words</option>
								<option value=33>33 pages / 8250 words</option>
								<option value=34>34 pages / 8500 words</option>
								<option value=35>35 pages / 8750 words</option>
								<option value=36>36 pages / 9000 words</option>
								<option value=37>37 pages / 9250 words</option>
								<option value=38>38 pages / 9500 words</option>
								<option value=39>39 pages / 9750 words</option>
								<option value=40>40 pages / 10000 words</option>
								<option value=41>41 pages / 10250 words</option>
								<option value=42>42 pages / 10500 words</option>
								<option value=43>43 pages / 10750 words</option>
								<option value=44>44 pages / 11000 words</option>
								<option value=45>45 pages / 11250 words</option>
								<option value=46>46 pages / 11500 words</option>
								<option value=47>47 pages / 11750 words</option>
								<option value=48>48 pages / 12000 words</option>
								<option value=49>49 pages / 12250 words</option>
								<option value=50>50 pages / 12500 words</option>
								<option value=51>51 pages / 12750 words</option>
								<option value=52>52 pages / 13000 words</option>
								<option value=53>53 pages / 13250 words</option>
								<option value=54>54 pages / 13500 words</option>
								<option value=55>55 pages / 13750 words</option>
								<option value=56>56 pages / 14000 words</option>
								<option value=57>57 pages / 14250 words</option>
								<option value=58>58 pages / 14500 words</option>
								<option value=59>59 pages / 14750 words</option>
								<option value=60>60 pages / 15000 words</option>
								<option value=61>61 pages / 15250 words</option>
								<option value=62>62 pages / 15500 words</option>
								<option value=63>63 pages / 15750 words</option>
								<option value=64>64 pages / 16000 words</option>
								<option value=65>65 pages / 16250 words</option>
								<option value=66>66 pages / 16500 words</option>
								<option value=67>67 pages / 16750 words</option>
								<option value=68>68 pages / 17000 words</option>
								<option value=69>69 pages / 17250 words</option>
								<option value=70>70 pages / 17500 words</option>
								<option value=71>71 pages / 17750 words</option>
								<option value=72>72 pages / 18000 words</option>
								<option value=73>73 pages / 18250 words</option>
								<option value=74>74 pages / 18500 words</option>
								<option value=75>75 pages / 18750 words</option>
								<option value=76>76 pages / 19000 words</option>
								<option value=77>77 pages / 19250 words</option>
								<option value=78>78 pages / 19500 words</option>
								<option value=79>79 pages / 19750 words</option>
								<option value=80>80 pages / 20000 words</option>
								<option value=81>81 pages / 20250 words</option>
								<option value=82>82 pages / 20500 words</option>
								<option value=83>83 pages / 20750 words</option>
								<option value=84>84 pages / 21000 words</option>
								<option value=85>85 pages / 21250 words</option>
								<option value=86>86 pages / 21500 words</option>
								<option value=87>87 pages / 21750 words</option>
								<option value=88>88 pages / 22000 words</option>
								<option value=89>89 pages / 22250 words</option>
								<option value=90>90 pages / 22500 words</option>
								<option value=91>91 pages / 22750 words</option>
								<option value=92>92 pages / 23000 words</option>
								<option value=93>93 pages / 23250 words</option>
								<option value=94>94 pages / 23500 words</option>
								<option value=95>95 pages / 23750 words</option>
								<option value=96>96 pages / 24000 words</option>
								<option value=97>97 pages / 24250 words</option>
								<option value=98>98 pages / 24500 words</option>
								<option value=99>99 pages / 24750 words</option>
								<option value=100>100 pages / 25000 words</option>
								<option value=101>101 pages / 25250 words</option>
								<option value=102>102 pages / 25500 words</option>
								<option value=103>103 pages / 25750 words</option>
								<option value=104>104 pages / 26000 words</option>
								<option value=105>105 pages / 26250 words</option>
								<option value=106>106 pages / 26500 words</option>
								<option value=107>107 pages / 26750 words</option>
								<option value=108>108 pages / 27000 words</option>
								<option value=109>109 pages / 27250 words</option>
								<option value=110>110 pages / 27500 words</option>
								<option value=111>111 pages / 27750 words</option>
								<option value=112>112 pages / 28000 words</option>
								<option value=113>113 pages / 28250 words</option>
								<option value=114>114 pages / 28500 words</option>
								<option value=115>115 pages / 28750 words</option>
								<option value=116>116 pages / 29000 words</option>
								<option value=117>117 pages / 29250 words</option>
								<option value=118>118 pages / 29500 words</option>
								<option value=119>119 pages / 29750 words</option>
								<option value=120>120 pages / 30000 words</option>
								<option value=121>121 pages / 30250 words</option>
								<option value=122>122 pages / 30500 words</option>
								<option value=123>123 pages / 30750 words</option>
								<option value=124>124 pages / 31000 words</option>
								<option value=125>125 pages / 31250 words</option>
								<option value=126>126 pages / 31500 words</option>
								<option value=127>127 pages / 31750 words</option>
								<option value=128>128 pages / 32000 words</option>
								<option value=129>129 pages / 32250 words</option>
								<option value=130>130 pages / 32500 words</option>
								<option value=131>131 pages / 32750 words</option>
								<option value=132>132 pages / 33000 words</option>
								<option value=133>133 pages / 33250 words</option>
								<option value=134>134 pages / 33500 words</option>
								<option value=135>135 pages / 33750 words</option>
								<option value=136>136 pages / 34000 words</option>
								<option value=137>137 pages / 34250 words</option>
								<option value=138>138 pages / 34500 words</option>
								<option value=139>139 pages / 34750 words</option>
								<option value=140>140 pages / 35000 words</option>
								<option value=141>141 pages / 35250 words</option>
								<option value=142>142 pages / 35500 words</option>
								<option value=143>143 pages / 35750 words</option>
								<option value=144>144 pages / 36000 words</option>
								<option value=145>145 pages / 36250 words</option>
								<option value=146>146 pages / 36500 words</option>
								<option value=147>147 pages / 36750 words</option>
								<option value=148>148 pages / 37000 words</option>
								<option value=149>149 pages / 37250 words</option>
								<option value=150>150 pages / 37500 words</option>
								<option value=151>151 pages / 37750 words</option>
								<option value=152>152 pages / 38000 words</option>
								<option value=153>153 pages / 38250 words</option>
								<option value=154>154 pages / 38500 words</option>
								<option value=155>155 pages / 38750 words</option>
								<option value=156>156 pages / 39000 words</option>
								<option value=157>157 pages / 39250 words</option>
								<option value=158>158 pages / 39500 words</option>
								<option value=159>159 pages / 39750 words</option>
								<option value=160>160 pages / 40000 words</option>
								<option value=161>161 pages / 40250 words</option>
								<option value=162>162 pages / 40500 words</option>
								<option value=163>163 pages / 40750 words</option>
								<option value=164>164 pages / 41000 words</option>
								<option value=165>165 pages / 41250 words</option>
								<option value=166>166 pages / 41500 words</option>
								<option value=167>167 pages / 41750 words</option>
								<option value=168>168 pages / 42000 words</option>
								<option value=169>169 pages / 42250 words</option>
								<option value=170>170 pages / 42500 words</option>
								<option value=171>171 pages / 42750 words</option>
								<option value=172>172 pages / 43000 words</option>
								<option value=173>173 pages / 43250 words</option>
								<option value=174>174 pages / 43500 words</option>
								<option value=175>175 pages / 43750 words</option>
								<option value=176>176 pages / 44000 words</option>
								<option value=177>177 pages / 44250 words</option>
								<option value=178>178 pages / 44500 words</option>
								<option value=179>179 pages / 44750 words</option>
								<option value=180>180 pages / 45000 words</option>
								<option value=181>181 pages / 45250 words</option>
								<option value=182>182 pages / 45500 words</option>
								<option value=183>183 pages / 45750 words</option>
								<option value=184>184 pages / 46000 words</option>
								<option value=185>185 pages / 46250 words</option>
								<option value=186>186 pages / 46500 words</option>
								<option value=187>187 pages / 46750 words</option>
								<option value=188>188 pages / 47000 words</option>
								<option value=189>189 pages / 47250 words</option>
								<option value=190>190 pages / 47500 words</option>
								<option value=191>191 pages / 47750 words</option>
								<option value=192>192 pages / 48000 words</option>
								<option value=193>193 pages / 48250 words</option>
								<option value=194>194 pages / 48500 words</option>
								<option value=195>195 pages / 48750 words</option>
								<option value=196>196 pages / 49000 words</option>
								<option value=197>197 pages / 49250 words</option>
								<option value=198>198 pages / 49500 words</option>
								<option value=199>199 pages / 49750 words</option>
								<option value=200>200 pages / 50000 words</option>-->
							</select>
							
							<label>Deadline</label>
							<select class = "form-control" name = "" id = "deadline">
								<option value = "5">3 hrs</option>
								<option value = "4.5">12 hrs</option>
								<option value = "4">24 hrs</option>
								<option value = "3.5">2 Days</option>
								<option value = "3">3 Days</option>
								<option value = "2.5">4 Days</option>
								<option value = "2" selected>5 Days</option>
								<option value = "1.5">10 Days</option>
								<option value = "1">15 Days</option>
								<option value = "1">15-30 Days</option>
								<option value = "1">Over-30 Days</option>
							</select>
							<label>Type Of Paper</label>
							<select class = "form-control" name = "" id = "type">
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
							
						</form>
						<h4 style = "margin:30px 0 15px 0; color:#09af11; text-shadow:#0be015; font-size:2em;" class = "results"></h4>
					</div>
					<div class = "modal-footer center">
						<a href = "index.php"><button class = "btn btn-danger" style = "float:left" type = "button" data-dismiss = "modal">Back</button></a>
						<a href = "order.php"><button class = "btn btn-info" style = "float:right" type = "submit" name = "">Continue</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script src="js/essay.js"></script>

</body>

</html>

