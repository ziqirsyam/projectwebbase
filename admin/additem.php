<!DOCTYPE html>
<html>
<head>
	<title>Addiem</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet"type="text/css"href="adminstyle.css"/>
</head>
<body>
  <div id="header"><br><br>
  <div class="adminlogo"><a href="#">Add<span>item</span></a></div><br><br><br>
</div>

<div id="container">
<div id="sidebar">
  <ul id="nav">
    <li><a class="dash"href="adminhomepage.php">Dashboard</a></li>
    <li><a href="additem.php">Add Data</a></li>
    <li><a href="deleteitem.php">Delete Data</a></li>
    <li><a href="updateitem.php">Update Data</a></li>
    <li><a href="summaryitem.php">Summary Data</a></li>
    <li><a href="daffa.php">Developer Email</a></li>
    <li><a href="signinadmin">Log Out</a></li>
  </ul>
</div>
	<div align="right"><a href="inventory_list.php#inventoryForm">+ Add New Inventory Item</a></div>

 <a name="inventoryForm" id="inventoryForm"></a>
<div id="content">
<h3>
Add New Inventory Item Form
</h3>
<form action="inventory_list.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
  <tr>
    <div class="name">
    <td><p  class="proname"> Product Name</p></td>
    <td><label>
      <input name="product_name" type="text" id="product_name" size="64" />
    </label></td>
  </div>
  </tr>
  <tr>
    <div class="price">
    <td><p  class="proprice">Product Price</p></td>
    <td><label>
          <input name="price" type="text" id="price" size="12" />
          €
    </label></td>
  </div>
  </tr>
   <tr>
    <div  class="category">
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
  <tr>
    <div class="detail">
    <td align="left"><p class="dename">Product Details</p></td><br>
    <td><label>
      <textarea name="details" id="details" cols="64" rows="5"></textarea>
    </label></td>
  </div>
  </tr>
  <br>
  <tr>
    <td align="left">Product Image</td>
    <td><label>
      <input type="file" name="fileField" id="fileField" />
    </label></td>
  </tr>
  <br>      
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="button" id="button" value="Add Item Now" />
</label>
</td>
</tr>
</form>
</div>
    </label></td>
  </tr>
</table>
</form>
</body>
</html>
