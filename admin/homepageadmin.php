<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<?php include 'adminnavbar.php'?>
	<h1>Homepage admin</h1>
	<div id="header">
	<img src="admin_icon.png"alt="adminlogo"id="adminlogo"><br>Admin Picture
</div>

<div id="sidebar">
	<ul>
		<li><a href="#add.php">Add Data</li>
		<li><a href="#delete.php">Delete Data</li>
		<li><a href="#update.php">Update Data</li>
		<li><a href="#summary.php">Summary Data</li>
		<a href="#"></a><li>Developer Email</li>
		<li><a href="#sign_in_admin">Log Out</li>
	</ul>
</div>

<div id="content">
	<h2>  Data </h2>
	<p class="ID">ID</p>
		<table ><!--Change to PHP-->
					<tr>
						<th>Name:</th>
						<td> user name</td>
					</tr>
					<tr>	
					    <th>Username:</th>
					    <td>php</td>
					</tr>    
					<tr>    
				        <th>Email:</th>
				        <td> php</td>
				    </tr> 
				    <tr>
				    	<th>No.Phone</th>
				    	<td><i>php</i></td>
				    </tr>
				    <tr>
				    	<th>Gender</th>
				    	<td><i>php</i></td>
				    </tr>
				     <tr>
				    	<th>Address</th>
				    	<td>php</td>
				    </tr>
				     <tr>
				    	<th>Post Code</th>
				    	<td>php</td>
				    </tr>
				    <tr>
				    	<th>State</th>
				    	<td>php</td>
				    </tr>
				    <tr>
				        <th>Country</th>
				        <td>php</td>
				    </tr>    	
				</table>

	</div>



</div>
	<?php include '../footer.php'?>
</body>
</html>
<!--
	Reference
	https://speckyboy.com/beautifully-designed-admin-dashboards/
-->
