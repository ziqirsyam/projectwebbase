<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
</head>
<body>
	<?php include'usernavbar.php'?>
	

	<div class="shopping-cart">

      <h1>Cart</h1>

      <!-- Product 1 -->
      <div class="item">
        <div class="buttons">
          <span class="deletebutton"></span>
          <span class="likebutton"></span>
        </div>

        <div class="image">
          <img src=".jpg" alt="" />
        </div>

        <div class="description">
          <span>phone</span>
          <span>iphone11</span>
          <span>White</span>
        </div>

        <div class="quantity">
          <button class="plusbutton" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minusbutton" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="totalprice">RM1549</div>
        <a href="checkout.php"><button>Checkout</button>
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

    	$('.plusbuttonn').on('click', function(e) {
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
