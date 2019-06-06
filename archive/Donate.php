<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<title>Donations & memberships</title>
	<meta charset="UTF-8">
	<link href="CityFarmStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper row1">
		<header class="clear" id="header">
			<div id="logo">
				<h1><a href="http://at-web2.comp.glam.ac.uk/students/14732394/index.htm">City Farm</a></h1>
				<h2>Lifestyle services and produce</h2>
			</div>
			<nav>
				<ul>
					<li>
						<a href="http://at-web2.comp.glam.ac.uk/students/14732394/index.htm">Home</a>
					</li>
					<li>
						<a href="http://at-web2.comp.glam.ac.uk/students/14732394/about.htm">About us</a>
					</li>
					<li>
						<a href="http://at-web2.comp.glam.ac.uk/students/14732394/cafe.htm">Cafe & Produce shop</a>
					</li>
					<li>
						<a href="http://at-web2.comp.glam.ac.uk/students/14732394/donate.php">●Donations & Memberships●</a>
					</li>
					<li class="last">
						<a href="http://at-web2.comp.glam.ac.uk/students/14732394/contact.htm">Contact us</a>
					</li>
				</ul>
			</nav>
		</header>
	</div>
	<!-- end of header -->
	<div class="wrapper row2">
		<div class="clear" id="container">
			<div id="full">
				<img id="gif" src="images/friends.png" alt="images/friends.jpg">
				<h3>How your donation helps us</h3>
				<p class="Main">
          The City Farm is a local charity which runs a small farm. The City Farm provides training opportunities
          for vulnerable adults, allowing them to develop skills and social confidence.
          The City Farm is open to visitors and has a small café.
          City Farm is entirely self-funded. <br>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
          and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
          leap into electronic typesetting, remaining essentially unchanged.<br><br> </p>
					<div>
						<p><form>
										<fieldset>
											<legend>Account</legend>
											<p><label for="Name">Name*: </label><input id="Name" Name="Name" type="text" maxlength="50" required></p>
											<p><label for="Email">Email*: </label><input id="Email" name="Email" type="text" maxlength="50" required></p>
											<p><label for="Password">Password*: </label><input id="Password" name="Password" type="text" maxlength="50" required></p>
										  </fieldset>
											<fieldset>
												<legend>Donation</legend>
												<p><label for="Donation">Donation*: </label><input id="Donation" name="Donation" type="text" maxlength="8" value="£" required></p>
											</fieldset>
											<fieldset>
												<legend>Membership</legend>
									<?php
											include("dbinfo.inc.php");
											$conn = mysqli_connect($servername, $username, $password, $database);

											// Check connection
											if (!$conn) {
														die("Connection failed: " . mysqli_connect_error());
												}
									?>
									<?php
											$sql="SELECT * FROM membership ORDER BY membership";
											$result = $conn->query($sql);
									?>
										<table class="memberships">
											<caption>Membership prices</caption>
											<thead>
												<tr>
															<td><strong>Membership</strong></td>
															<td><strong>One month</strong></td>
															<td><strong>Three Months</strong></td>
															<td><strong>One Year</strong></td>
												</tr>
											</thead>
											<tbody>
									<?php
													if ($result->num_rows > 0) {
															// output data of each row
															while($row = $result->fetch_assoc()) {
														echo ("<tr>\n");
														echo ("<td>".$row["membership"]."</td>");
														echo ("<td>".$row["one month"]."</td>");
														echo ("<td>".$row["three months"]."</td>");
														echo ("<td>".$row["one year"]."</td>");
														echo ("</tr>\n");

																}
													} else {
																echo "0 results";
													}
									?>
											</tbody>
										</table >
										<div>
											<p><br></p>
										<input type="radio" name="membership" id="memgold"
										value="gold" checked><label for="memgold">Gold</label>

										<input type="radio" name="membership" id="memplat"
										value="plat" checked><label for="memplat"> Platinum</label>

										<input type="radio" name="membership" id="memsilver"
										value="silver"><label for="memsilver"> Silver</label>

									 	<input class ="submit" type="submit" value="Submit">
	 								 	<input type="reset" value="Clear">
										</fieldset>
									</div>
					</div>
			</div>
		</div>
<!-- Footer -->
	<div>
		<footer class="clear" id="footer">
			<p class="fl_right">Copyright © 2018 example legal info</p>
		</footer>
	</div>
</body>
</html>
