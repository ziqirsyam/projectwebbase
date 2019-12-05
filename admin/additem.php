<!DOCTYPE html>
<html>
<head>
	<title>Addiem</title>
</head>
<body>
	<div align="right"><a href="inventory_list.php#inventoryForm">+ Add New Inventory Item</a></div>

 <a name="inventoryForm" id="inventoryForm"></a>
<h3>
Add New Inventory Item Form
</h3>
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
  <tr>
    <td align="left">Product Details</td><br>
    <td><label>
      <textarea name="details" id="details" cols="64" rows="5"></textarea>
    </label></td>
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
    </label></td>
  </tr>
</table>
</form>
</body>
</html>
