<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="./style.css" />
    <title>Shop</title>
  </head>
  <body>
    <header class="fashion-header">
      <nav class="fashion-nav">
        <div class="logo-img">
          <img src="../../Resources/Vector.svg" alt="logo" />
          <h4>Rathnayke GYMS</h4>
        </div>
        <ul class="scroll-navigation">
        <li><a class="active" href="../../index.php">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../about.php">Gallery</a></li>
          <li><a href="../contactUs.php">Contact Us</a></li>
          <li><a href="../login.php">Sign in</a></li>
          <li>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
          </li>
         
        </ul>
        <div class="cart-btn">
          <span class="nav-icon">
          <i class="fab fa-opencart"></i>
          </span>
          <div class="cart-items">0</div>
        </div>
        
      </nav>
    </header>
    <section class="fashion-cover">
      <img
        src="../../Resources/fashion/cover/coverCollage.png"
        alt=""
        class="bg-img"
      />
    </section>
    <section class="fashion-products">
    <section class="product">
      <div class="section-title">
        <h2>Our Products</h2>
      </div>
      <div class="products-center">
        <!-- single product  -->
        <article class="product">
          <div class="img-container">
            <img
              src="./images/product-2.jpg"
              alt="product"
              class="product-img"
            />
            <button class="bag-btn" data-id="1">
              <i class="fas fa-shopping-cart"></i>
              add to cart
            </button>
          </div>
          <h3>Turbo Kit</h3>
          <h4>$150</h4>
        </article>
        <!-- end of single product  -->
        <!-- single product  -->
        <article class="product">
          <div class="img-container">
            <img
              src="./images/product-2.jpg"
              alt="product"
              class="product-img"
            />
            <button class="bag-btn" data-id="1">
              <i class="fas fa-shopping-cart"></i>
              add to cart
            </button>
          </div>
          <h3>Turbo Kit</h3>
          <h4>$150</h4>
        </article>
        <!-- end of single product  -->
        
        
      </div>
    </section>

    </section>
    <!-- End of products -->
    <!-- cart -->
    <div class="cart-overlay">
      <div class="cart">
        <span class="close-cart">
          <i class="fas fa-window-close"></i>
        </span>
        <h2>Your Cart</h2>
        <div class="cart-content">
          <!-- cart-item -->
          <div class="cart-item">
            <!-- <img src="./images/product-1.jpeg" alt=product-image"">
            <div>
              <h4>Turbo</h4>
              <h5>$150</h5>
              <span class="remove-item">remove</span>
            </div>
            <div>
              <i class="fas fa-chevron-up"></i>
              <p class="item-amount"></p>
              <i class="fas fa-chevron-down"></i>
            </div> -->
          </div>
          <!-- End of cart-item -->
        </div>
        <div class="cart-footer">
          <h3>Your Total : $ <span class="cart-total">0</span></h3>
          <button class="clear-cart banner-btn">clear cart</button>
          <!-- class is named as clear-cart banner-bnt simply bcz we then we can use 
        the banner-btn css we used in the banner section -->
        </div>
      </div>
    </div>
    <!-- End of cart -->
    <script src="./app.js"></script>
  </body>
</html>
