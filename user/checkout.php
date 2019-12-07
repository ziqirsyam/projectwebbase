<!DOCTYPE html>
<html>
<head>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <link rel="stylesheet" type="text/css" href="../css/userdeis.css">
   <script src="https://use.fontawesome.com/8997ffd65f.js"></script>

      <section>
    <nav>
  <ul id="navitop" class ="navitop">
    <div class="flex-container">
      
        <li class="dropdown">
        <i  id="bars" class="fas fa-bars"></i>
        <div class="dropdown-content">
      <a class="sign-up" href="userdetails.php">User detail</a>
        <a class="log-in" href="../sign-out.php">Sign out</a>
    </div></li>
    <li class="list"><a href="homepage.php">Mi Store</a></li>
        <li class="list"><a href="apple.php">Apple</a></li>
        <li class="list"><a href="samsung.php">Samsung</a></li>
        <li class="list"><a href="sony.php">Sony</a></li>
        <li class="list"><a href="xiaomi.php">Xiaomi</a></li>
        <li class="list"><a href="oppo.php">Oppo</a></li>
        <div class="cart">
        <li class="list"><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
      </div>
      <form  class="search" action="/action_page.php">
        <li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
      </form>
       <script>
    window.onscroll = function() {myFunction()};

    var navitop = document.getElementById("navitop");
    var sticky = navitop.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
        navitop.classList.add("sticky")
      } else {
        navitop.classList.remove("sticky");
      }
    }


</script>
          
    </div>
  </ul>
    </nav>
  </section>
	<title>Checkout</title>
</head>
<body>
	 
	 <h1>Checkout</h1>
  <div class="flex-container2">
      <form method="POST" class="flex-container-form1" action="/action_page.php" >
        <h3><a class="menu"> Billing Address</a></h3>
        <div class="user_fname">    
          <input type="text" name="fname" autocomplete="off" required />
          <label for="fname" class="label_fname">
            <span class="content_fname">Full Name</span>
          </label>
        </div>
        <br>
        <div class="user_email">    
          <input type="text" name="email" autocomplete="off" required />
          <label for="email" class="label_email">
            <span class="content_email">Email</span>
          </label>
        </div>
        <br>
        <div class="user_add">    
          <input type="text" name="add" autocomplete="off" required />
          <label for="add" class="label_add">
            <span class="content_add">Address</span>
          </label>
        </div>
        <br>
        <div class="user_city">    
          <input type="text" name="lname" autocomplete="off" required />
          <label for="city" class="label_city">
            <span class="content_city">City</span>
          </label>
        </div>
        <br>
        <div class="user_state">    
          <input type="text" name="state" autocomplete="off" required />
          <label for="state" class="label_state">
            <span class="content_state">State</span>
          </label>
        </div>
        <br>
        <div class="user_count">    
          <input type="text" name="count" autocomplete="off" required />
          <label for="count" class="label_count">
            <span class="content_count">Country</span>
          </label>
        </div>
        <br>
        <div class="user_code">    
          <input type="text" name="code" autocomplete="off" required />
          <label for="code" class="label_code">
            <span class="content_code">Post Code</span>
          </label>
        </div>
        <br>
    </form>
        <form class="flex-container-form2">
            <h3>Payment</h3>
            <label class="card" for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <br>
              <div class="user_ncard">    
                <input type="text" name="ncard" autocomplete="off" required />
                <label for="ncard" class="label_ncard">
                  <span class="content_ncard">Name on Card</span>
                </label>
              </div>
              <br>
              <div class="user_cardno">    
                <input type="text" name="cardno" autocomplete="off" required />
                <label for="cardno" class="label_cardno">
                  <span class="content_cardno">Credit Card number</span>
                </label>
              </div>
              <br>
              <div class="user_month">    
                <input type="text" name="month" autocomplete="off" required />
                <label for="month" class="label_month">
                  <span class="content_month">Expiry Month</span>
                </label>
              </div>
              <br>
              <div class="user_year">    
                <input type="text" id="expyear" name="year" autocomplete="off" required />
                <label for="year" class="label_year">
                  <span class="content_year">Expiry Year</span>
                </label>
              </div>
              <br>
              <div class="user_cvv">    
                <input type="text" id="cvv" name="cvv" autocomplete="off" required />
                <label for="cvv" class="label_cvv">
                  <span class="content_cvv">CVV</span>
                </label>
              </div>
              <br>
                </form>
              </div>
            </body>
            <div class="sub-button">
                <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </div>

    <!--<div class="container">
      <h4 class="cart">Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$5</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <p>Total<span class="price"><b>$30</b></span></p>
    </div>-->


	 	</form>
	 </div>
	 <?php include '../footer.php'?>
</body>
</html>
<!--
	Reference
	https://www.w3schools.com/howto/howto_css_checkout_form.asp
-->
