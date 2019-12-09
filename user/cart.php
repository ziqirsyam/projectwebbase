  
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
      <div class="box">
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
</div>
</div>

    <div class="total">
      <div class="totalprice">Total:</div>
      <div class="displayprice">RM1549</div>
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
