<html>
<head>
	<title>Seller Feedback</title>
</head>
<body>
	<div style="background-image: url('img1.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<td><h2 align="center"><font face="Garamond"> E-Farming </font></h2><br>
				<a href="https://www.google.com/">google |</a>
				<a href="https://www.facebook.com/">facebook |</a>
				<a href="https://twitter.com/?lang=en">twitter |</a>
				<a href="https://www.yahoo.com/">yahoo |</a>
				<a href="https://www.linkedin.com/">linkdin</a>

			</td>
			<td width="80%" colspan="2">
				<h1 align="center"><font face="Garamond" color="blue">Seller Feedback</font></h1>
				<h4 align="right">
					<a href="Home.php">Home || </a>
					<a href="Logout.php">Logout</a>
				</h4>				
			</td>
		</tr>
		<tr height="600px">
			<td  rowspan="3">
				<h3>
				<a href="Admin Profile.php">Admin Profile</a><br>
		<a href="Employee Information.php">Employee Information</a><br>
        <a href="Employee Salary.php">Employee Salary</a><br>
        <a href="Seller Info.php">Seller Info</a><br>
        <a href="Verified Seller List.php">Verified Seller List</a><br>
        <a href="Seller Post.php">Seller Post</a><br>
        <a href="Seller Feedback.php">Seller Feedback</a><br>
        <a href="Customer Info.php">Customer Info</a><br>
        <a href="Customer Order.php">Customer Order</a><br>
        <a href="Transiction.php">Transiction</a><br>
        <a href="Customer Feedback.php">Customer Feedback</a><br>
        <a href="News & Info.php">News & Info</a><br>
        
			</h3>
			</td>
			<td>
				
    			<h3> 
    				<?php
					$file = fopen("Seller Feedback.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
				</h3>
			
				<marquee direction="right" behavior="alternate" >
        			**This site has been developed by Md.Abir Raihan  as WebTech prject**
    			</marquee>
			</td>
		</tr>
	</table>

</body>
</html>