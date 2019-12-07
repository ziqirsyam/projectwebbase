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
	<title>Update Item</title>
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
Update Inventory Item Form
</h3><br>

<div id="content">
  <h3>Delete User</h3>
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
        <th>Action</th>
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
          <td>
            <a href="updateform.php?itemID=<?php echo $row['itemID'];?>"><button>Update</button></a>
          </td>
        </tr>
        <?php
        $i++;
        }
      ?>
    </tbody>
  </table>
</div>

<form action="inventory_list.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
  <tr>
    <td>Product Name</td>
    <td><label>
      <input name="product_name" type="text" id="product_name" size="64" />
    </label></td>
  </tr>
  <tr>
    <td align="left">Product Price</td>
    <td><label>
      €
          <input name="price" type="text" id="price" size="12" />
    </label></td>
  </tr>
   <tr>
    <td align="left">Category</td>
    <td><label>
      <select name="brand" id="brand">
      <option value="apple">Apple</option>
      <option value="xiaomi">Xiaomi</option>
      <option value="oppo">Opoo</option>
      <option value="sony">Sony</option>
      <option value="samsung">Samsung</option>
      </select>
    </label></td>
  </tr>
  <br>
  <br>
  <tr>
    <td align="left">Product Details</td><br>
    <td><label>
      <textarea name="details" id="details" cols="64" rows="5"></textarea>
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
      <input type="submit" name="button" id="button" value="Delete Item" />
    </label></td>
  </tr>
</table>
</form>
</div>
</div>
<footer>
  Mistore, 2019
</footer>
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