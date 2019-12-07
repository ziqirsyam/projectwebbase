<!DOCTYPE html>
<html>
<head>
  <title>Print Receipt</title>
  <script type="text/javascript"></script>
</head>
<body>
  <fieldset>
    <legend>Billing Address</legend>
    <table>
      <tr>
        <td>Full Name</td>
        <td><?php echo $_POST['fname']?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $_POST['email']?></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><?php echo $_POST['add']?></td>
      </tr>
      <tr>
        <td>City</td>
        <td><?php echo $_POST['city']?></td>
      </tr>
      <tr>
        <td>State</td>
        <td><?php echo $_POST['state']?></td>
      </tr>
      <tr>
        <td>Country</td>
        <td><?php echo $_POST['country']?></td>
      </tr>
      <tr>
        <td>Post Code</td>
        <td><?php echo $_POST['code']?></td>
      </tr>
    </table>
  </fieldset>
  <form>
    <input type="button" value="Print" onclick="window.print()" /> 
  </form>
</body>
</html>