<!DOCTYPE html>
<html>
<head>
	<title>Delete Item</title>
  <link rel="stylesheet"type="text/css"href="adminstyle.css"/>
</head>
<div id="header"><br><br>
  <div class="adminlogo"><a href="#">Admin<span>Dashboard</span></a></div><br><br><br>
</div>

<div id="container">
<div id="sidebar">
  <ul id="nav">
    <li><a class="dash"href="adminhomepage.php">Dashboard</a></li>
    <li><a href="additem.php">Add Data</a></li>
    <li><a href="deleteitem.php">Delete Data</a></li>
    <li><a href="updateitem.php">Update Data</a></li>
    <li><a href="summaryitem.php">Summary Data</a></li>
    <li><a href="signin.php">Log Out</a></li>
  </ul>
</div>
<div id="content">
	<div align="right"><a href="inventory_list.php#inventoryForm">- Delete Inventory Item</a></div>

 <a name="inventoryForm" id="inventoryForm"></a>
<h3>
Delete Inventory Item Form
</h3><br>
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
  MiStore, 2019
</footer>
</body>
</html>
