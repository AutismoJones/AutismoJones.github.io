<!DOCTYPE html>
<html lang="en">
<head>
	<title>membership</title>
	<meta charset="utf-8">
	<link href="memstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
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
</body>
	
