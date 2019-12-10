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
    <?php
        require "../database/conndb.php";
        $sql = "SELECT * FROM cart WHERE cuser = '$userid'";
        $result = mysql_query($sql, $connection);
        
    ?>
    <table class="admin_detail">
          <thead>
            <tr>
              <th>No.</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Brand</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i = 1;
              while ($row = mysql_fetch_array($result)) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['cproduct_name'];?></td>
                <td><?php echo $row['cprice'];?></td>
                <td><?php echo $row['cbrand'];?></td>
                <td><?php echo $row['cdetails'];?></td>
              </tr>
              <?php
              $i++;
              }
            ?>
          </tbody>
      </table>
      <?php
        require "../database/conndb.php";
        $sql = "SELECT * FROM cart WHERE cuser = '$userid'";
        $result = mysql_query("SELECT sum(cprice) FROM cart");
        while ($row = mysql_fetch_array($result)){
        ?>
          Total Price : RM <?php echo $row['sum(cprice)']?>
      <?php
          }
      ?>
  </fieldset>
  Paid by credit card
  <form>
    <input type="button" value="Print" onclick="window.print()" /> 
  </form>
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