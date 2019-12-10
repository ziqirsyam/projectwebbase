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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="stylesheet" type="text/css" href="../css/userdeis.css" charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Cart</title>
	
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
  <meta name="robots" content="noindex,follow" />

    <!--<section>
    <nav>
  <ul id="navitop" class ="navitop">
    <div class="flex-container">
      
        <li class="dropdown">
        <i  id="bars" class="fas fa-bars"></i>
        <div class="dropdown-content">
      <a class="sign-up" href="#">Sign Up</a>
        <a class="log-in" href="#">Log in</a>
    </div></li>
    <li class="list"><a href="#Mistore">Mi Store</a></li>
        <li class="list"><a href="#news">Apple</a></li>
        <li class="list"><a href="#contact">Samsung</a></li>
        <li class="list"><a href="#about">Sony</a></li>
        <li class="list"><a href="#about">Xiaomi</a></li>
        <li class="list"><a href="#about">Oppo</a></li>
        <div class="cart">
        <li class="list"><a href="#about"><i class="fas fa-shopping-cart"></i></a></li>
      </div>
      <form  class="search" action="/action_page.php">
        <li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
      </form>

          
    </div>
  </ul>
    </nav>
  </section>-->
</head>
<body>
	<?php include'usernavbar.php'?>
	
	<div class="shopping-cart">
      <h1>Cart</h1>
      <!-- Product 1 -->
<div class="box2">
      <!--<div class="box">
        <div class="item">
          <div class="buttons">
            <span class="deletebutton"><i id="trash" class="fa fa-trash"></i></span>
            <span class="likebutton"><i id="heart" class="fa fa-heart"></i></span>
          </div>
          <div class="image">
            <img src=".jpg" alt="" />
          </div>
          <div class="description">
            <span><?php echo $_GET['name'];?></span>
            <span>White</span>
          </div>
          <div class="quantity">
            <button class="plusbutton" type="button" name="button">
              <i id="plus" class="fa fa-plus"></i>
              <img src="plus.svg" alt="" />
            </button>
              <input type="text" name="name" value="1">
            <button class="minusbutton" type="button" name="button">
              <i id="minus" class="fa fa-minus"></i>
              <img src="minus.svg" alt="" />
            </button>
          </div>  
  </div>
</div>-->

<div class="flex-container2">
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
              <th>Action</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i = 1;
              while ($row = mysql_fetch_array($result)) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['cproduct_name'];?><input type="hidden" name="cproduct_name" value="<?php echo $row['cproduct_name'];?>"></td>
                <td><?php echo $row['cprice'];?><input type="hidden" name="cprice" value="<?php echo $row['cprice'];?>"></td>
                <td><?php echo $row['cbrand'];?><input type="hidden" name="cbrand" value="<?php echo $row['cbrand'];?>"></td>
                <td><?php echo $row['cdetails'];?><input type="hidden" name="cdetails" value="<?php echo $row['cdetails'];?>"></td>
                <td>
                  <form method="POST" action="addcart.php">
                    <input type="hidden" name="cuser" value="<?php echo @$data['username'];?>">
                    <input type="hidden" name="payment" value="credit card">
                    <input type="submit" name="button" value="Buy">  
                  </form>
                </td>
                <td>
                  <form method="POST" action="cartdelete.php">
                    <input type="hidden" name="cartID" value="<?php echo $row['cartID'];?>">
                    <button class="delete">Delete</button>
                  </form>
                </td>
              </tr>
              <?php
              $i++;
              }
            ?>
          </tbody>
      </table>
  </div>

</div>

    <div class="total">
      <div class="totalprice">Total:</div>

      <div class="displayprice">
        <?php
        require "../database/conndb.php";
        $sql = "SELECT * FROM cart WHERE cuser = '$userid'";
        $result = mysql_query("SELECT sum(cprice) FROM cart");
        while ($row = mysql_fetch_array($result)){
        ?>
          RM <?php echo $row['sum(cprice)']?>
      <?php
          }
      ?>
      </div>
      <a href="checkout.php"><p class="checkoutbtn">Checkout</p>
    </div>

	<script type="text/javascript">
      $('.minusbutton').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
          value = value - 1;
        } else {
          value = 0;
        }

        $input.val(value);

      });

      $('.plusbutton').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
          value = value + 1;
        } else {
          value =100;
        }

        $input.val(value);
      });

      $('.likebutton').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>
	    
	<?php include '../footer.php'?>
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
