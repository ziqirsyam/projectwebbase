<?php
  @session_start();
  include "../database/conndb.php";

  if (@$_SESSION['user']) {
    $user = @$_SESSION['user'];

    $sql = mysql_query("SELECT * FROM user WHERE username = '$user'") or die(mysql_error());
    $data = mysql_fetch_array($sql);
    $result = mysql_num_rows($sql);
    $usertype = $data['access'];
    if ($usertype === "user") {
      $userid = $user;
      $sql = mysql_query("SELECT * FROM user WHERE username = '$userid'") or die(mysql_error());
      $data = mysql_fetch_array($sql);
      $result = mysql_num_rows($sql);

      @$_SESSION['user'] = $userid;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Summary Item</title>
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
<div id="content">
	<div align="right"><a href="inventory_list.php#inventoryForm">+ Update Inventory Item</a></div>

 <a name="inventoryForm" id="inventoryForm"></a>
<h3>
Summary Item
</h3><br>

<div id="content">
  <h3>Update Product</h3>
  <?php
    require "../database/conndb.php";
    $sql = "SELECT * FROM item";
    $result = mysql_query($sql, $connection);
  ?>
  <table>
    <thead>
      <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Details</th>
        <th>Buy</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i = 1;
        while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row['product_name'];?></td>
          <td><?php echo $row['price'];?></td>
          <td><?php echo $row['brand'];?></td>
          <td><?php echo $row['details'];?></td>
        </tr>
        <?php
        $i++;
        }
      ?>
    </tbody>
  </table>
</div>
</div>
</div>
<footer>
  Mistore, 2019
</footer>
</body>
</html>
<?php
    }
    elseif ($usertype === "admin") {
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