<?php
  @session_start();
  include "../database/conndb.php";

  if (@$_SESSION['user']) {
    $user = @$_SESSION['user'];

    $sql = mysql_query("SELECT * FROM user WHERE username = '$user'") or die(mysql_error());
    $data = mysql_fetch_array($sql);
    $result = mysql_num_rows($sql);
    $usertype = $data['access'];
    if ($usertype === "admin") {
      $userid = $user;
      $sql = mysql_query("SELECT * FROM user WHERE username = '$userid'") or die(mysql_error());
      $data = mysql_fetch_array($sql);
      $result = mysql_num_rows($sql);

      @$_SESSION['user'] = $userid;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
	<link rel="stylesheet"type="text/css"href="../css/adminstyle.css"/>
</head>
<div id="header"><br><br>
  <div class="adminlogo"><a href="#">Admin<span>Dashboard</span></a></div><br><br><br>
</div>

<div id="container">
<div id="sidebar">
  <ul id="nav">
    <li><a class="dash"href="homepageadmin.php">Dashboard</a></li>
    <li><a href="additem.php">Add Data</a></li>
    <li><a href="deleteitem.php">Delete Data</a></li>
    <li><a href="updateitem.php">Update Data</a></li>
    <li><a href="summaryitem.php">Summary Data</a></li>
    <li><a href="../sign-out.php">Log Out</a></li>
  </ul>
</div>
<body>
	<div id="content">
		<?php
		$itemID = $_GET['itemID'];
		$sql =mysql_query("SELECT * FROM item WHERE itemID = $itemID");
		$row = mysql_fetch_array($sql);
		$result = mysql_num_rows($sql);
	?>
	<form method="POST" action="update.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
		<input type="hidden" name="itemID" value="<?php echo $itemID;?>">
  <tr>
    <td>Product Name</td>
    <td><label>
      <input name="product_name" type="text" id="product_name" size="64" value="<?php echo $row['product_name']?>" />
    </label></td>
  </tr>
  <tr>
    <td align="left">Product Price</td>
    <td><label>
      €
          <input name="price" type="text" id="price" size="12" value="<?php echo $row['price']?>" />
    </label></td>
  </tr>
   <tr>
    <td align="left">Category</td>
    <td><label>
      <select name="brand" id="brand">
      <option value="apple" <?php if ($row['brand'] == "apple" ) echo 'selected'; ?> >Apple</option>
      <option value="xiaomi" <?php if ($row['brand'] == "xiaomi" ) echo 'selected'; ?> >Xiaomi</option>
      <option value="oppo" <?php if ($row['brand'] == "oppo" ) echo 'selected'; ?> >Opoo</option>
      <option value="sony" <?php if ($row['brand'] == "sony" ) echo 'selected'; ?> >Sony</option>
      <option value="samsung" <?php if ($row['brand'] == "samsung" ) echo 'selected'; ?> >Samsung</option>
      </select>
    </label></td>
  </tr>
  <br>
  <br>
  <tr>
    <td align="left">Product Details</td><br>
    <td><label>
      <textarea name="details" id="details" cols="64" rows="5"><?php echo $row['details']?></textarea>
    </label></td>
  </tr>
  <br><br>
  <tr>
    <td align="left">Quantity</td>
    <td><label>
      =
          <input name="quantity" type="text" id="quantity
          " size="12" />
    </label></td>
  </tr>
  <br><br>      
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="button" id="button" value="Update" />
    </label></td>
  </tr>
</table>
</form>
	</div>
</body>
</html>
<?php
    }
    elseif ($usertype === "user") {
      ?><script type="text/javascript">location.replace("../admin/homepageadmin.php");</script><?php
    }
    else{
      ?><script type="text/javascript">location.replace("../index.php");</script><?php
    }
  }
  else{
    ?><script type="text/javascript">location.replace("../index.php");</script><?php
  }
?>