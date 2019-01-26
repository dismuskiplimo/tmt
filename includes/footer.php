		</div>
		<div class = "container-fluid px10top footer">
			<div class = "row" style = "font-size:0.8em;">
				<div class = "col-lg-4">
					<p class = "center">
						<img src="images/norton.jpg">
					</p>
				</div>
				<div class = "col-lg-4">
					<p class = "center">
						<img src="images/truste.png">
					</p>
				</div>
				<div class = "col-lg-4">
					<p class = "center">
						<img src="images/paypal2.png">
					</p>
				</div>
			</div>
			<div class = "row" style="margin-top:100px;">
				<div class = "col-lg-4 center">
					
				</div>
				<div class = "col-lg-4 center">
					<p>Follow Us:</p>
					<img src="images/facebook.png">
					<img src="images/twitter.png">
					<img src="images/google.png">
				</div>
				<div class = "col-lg-4 center">
					
				</div>
			</div>
			<div class = "row">
				<div class = "col-lg-12 center">
					<p style = "font-size:0.8em;"><br />Copyright 2015&copy; 2015 EssaySolution Global Inc.</p>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			d = new Date();
			document.getElementById("tarehe").innerHTML = "<span class=\"glyphicon glyphicon-time\"></span> " + d.toDateString();
		</script>
	</body>
</html>
<?php
	if(isset($conn)){
		mysql_close($conn);
	}
?>