<html>
<head>
	<title>Seller Post</title>
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
				<h1 align="center"><font face="Garamond" color="blue">Seller Post</font></h1>
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
				<h2 align="left">
				<?php
					$file = fopen("Head1.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
					<h5>The average monthly income per farm household (considering only the paid out expenditure) is not the same as ‘net income / receipt earned by a farm household from crop cultivation’
					<a href="https://www.downtoearth.org.in/blog/agriculture/home-truth-of-indian-agriculture-farm-income-declined-in-india-in-7-years-79533">more
					</a></h5>

				</h2>
				<h2 align="left">
				<?php
					$file = fopen("Head2.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
					<h5>In light of Prof Rabbani’s thoughtful response to my article, I am happy to offer a few points of clarification
					<a href="https://www.dhakatribune.com/business/2021/10/16/in-response-to-the-rebuttal-on-back-to-the-future">more
					</a></h5>

				</h2>
				<h2 align="left">
				<?php
					$file = fopen("Head3.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
					<h5>According to local farmers, Binadhan-16 is harvested a month earlier than other conventional varieties of the Aman paddy, allowing them to plant winter crops ahead of schedule
					<a href="https://www.dhakatribune.com/bangladesh/agriculture/2021/10/09/gopalganj-farmers-profit-from-fast-yielding-binadhan-in-lean-season-2">more
					</a></h5>

				</h2>
				<h2 align="left">
				<?php
					$file = fopen("Head4.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
					<h5>The DAE had fixed a target of producing over 407,101 tons of summer vegetables from 22,030 hectares of land for all five districts in the Rangpur agriculture region during the last Kharif-1 season
					<a href="https://www.dhakatribune.com/bangladesh/nation/2021/10/06/record-4-94-427-tons-of-summer-vegetables-produced-in-rangpur">more
					</a></h5>

				</h2>
				<h2 align="left">
				<?php
					$file = fopen("Head5.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
					<h5>Pineapple growers are delighted to be earning a good profit this season
						<a href="https://www.dhakatribune.com/bangladesh/agriculture/2021/09/02/pineapple-demand-skyrockets-amid-bumper-yield-in-tangail">more
					</a></h5>

				</h2>
			</td>
		</tr>
	</table>

</body>
</html>