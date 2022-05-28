<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Bilbo&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Uchen&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header class="main-header">
      <div class="logo">
        <svg
          width="69"
          height="69"
          viewBox="0 0 69 69"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            id="logo"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M69 69H0V63.25H5.75V23H0V17.25H69V23H63.25V63.25H69V69ZM31.625 54.625H25.875V66.125H31.625V54.625ZM43.125 54.625H37.375V66.125H43.125V54.625ZM57.5 23H11.5V63.25H20.125V48.875H48.875V63.25H57.5V23ZM40.25 43.125H28.75V28.75H40.25V43.125ZM25.875 43.125H14.375V28.75H25.875V43.125ZM54.625 43.125H43.125V28.75H54.625V43.125ZM25.875 8.625V11.5C25.875 13.0841 24.5899 14.375 23 14.375C21.413 14.375 20.125 13.087 20.125 11.5V2.875C20.125 1.288 21.413 0 23 0C24.5899 0 25.875 1.29087 25.875 2.875V5.75H43.125V2.875C43.125 1.29087 44.4101 0 46 0C47.5899 0 48.875 1.29087 48.875 2.875V11.5C48.875 13.0841 47.5899 14.375 46 14.375C44.4101 14.375 43.125 13.0841 43.125 11.5V8.625H25.875ZM53.1875 8.625V10.0625C53.1875 10.856 52.5435 11.5 51.75 11.5C50.9565 11.5 50.3125 10.856 50.3125 10.0625V4.3125C50.3125 3.519 50.9565 2.875 51.75 2.875C52.5435 2.875 53.1875 3.519 53.1875 4.3125V5.75H54.625V8.625H53.1875ZM15.8125 5.75V4.3125C15.8125 3.519 16.4565 2.875 17.25 2.875C18.0435 2.875 18.6875 3.519 18.6875 4.3125V10.0625C18.6875 10.856 18.0435 11.5 17.25 11.5C16.4565 11.5 15.8125 10.856 15.8125 10.0625V8.625H14.375V5.75H15.8125Z"
            fill="white"
          />
        </svg>
        <h4>Rathnayke GYMS</h4>
      </div>
      <nav class="logo-nav" id="navbar">
        <div class="logo-img">
          <img src="./Resources/Vector.svg" alt="logo" />
          <h4>Rathnayke GYMS</h4>
        </div>
        <ul class="scroll-navigation">
        
          <li><a class="active" href="./index.php">Home</a></li>
          <li><a href="./pages/store/store.php">Shop</a></li>
          <li><a href="./pages/about.php">About</a></li>
          <li><a href="./pages/about.php">Gallery</a></li>
          <li><a href="./pages/contactUs.php">Contact Us</a></li>
          
            <li><a href='./pages/login.php'>Sign in</a></li>
          
          
        </ul>
      </nav>
    </header>
    <nav class="nav-bar">
      <ul class="nav-links">
        <h3><a class="active" href="./index.php">Home</a></h3>
        <h3><a href="./pages/store.php">Shop</a></h3>
        <h3><a href="./pages/about.php">About</a></h3>
        <h3><a href="./pages/about.php">Gallery</a></h3>
        <h3><a href="#">Packages</a></h3>
        <h3><a href="./pages/contactUs.php">Contact Us</a></h3>
      </ul>
      <div class="contact">
      <h2>Believe in yourself</h2>
        <p>
          Want to be healthy and have a perfect body? BLACKFIT is the right
          decision for you! It will create your personal training program and
          balance your diet so you could get the shape of your dream shortly!
        </p>
        <?php
          if($_SESSION["name"]) {
          ?>
            <button class='btn-signIn'><?php echo $_SESSION['name'];?></button>
          <?php
          }else echo "<button class='btn-signIn'>Sign In</button>";
          ?>
        
        <button class="btn-member">Become a Member</button>
      </div>
    </nav>
    <section>
      <nav class="burger">
        <span class="line1"></span>
        <span class="line2"></span>
      </nav>
      <div class="cover-container">
        <h2 class="main-title">
          <span>keep your body</span><br />
          fit & strong
        </h2>
        <h3 class="slogan">
          Rathnayke GYMS – fitness health center where your body gets its
          shape!<br />
          Start training now to stay fit and healthy all year round!
        </h3>
        <button class="join" onClick="document.getElementById('Programs-Section').scrollIntoView();">
          let's train
          <div class="mask"></div>
        </button>
        
        <span class="cover-blur"></span>
      </div>

      <div class="packages-container">
        <p class="cover-text">The one place to get the shape of your dream!</p>
        <div class="packages">
          <div class="fitness">
            <div class="fitness-image">
              <img
                src="./Resources/resize/fitness (1).jpg"
                alt="fitness-image"
              />
              <div class="image-text">
                <h2>fitness</h2>
              </div>
            </div>
          </div>
          <div class="body-building">
            <div class="body-building-image">
              <img
                src="./Resources/resize/body-building .jpg"
                alt="body-building-image"
              />
              <div class="image-text">
                <h2>body building</h2>
              </div>
            </div>
          </div>
          <div class="crossfit">
            <div class="crossfit-image">
              <img src="./Resources/resize/crossfit.jpg" alt="crossfit-image" />
              <div class="image-text">
                <h2>crossfit</h2>
              </div>
            </div>
          </div>
          <div class="cardio">
            <div class="cardio-image">
              <img src="./Resources/resize/cardio.jpg" alt="cardio-image" />
              <div class="image-text">
                <h2>cardio</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="Programs-Section" id = "Programs-Section">
      <h2 class="program-pricing"><span>program</span> pricing</h2>

      <div class="priceCard-container">
        <div class="priceCard-section">
          <div class="title-container">
            <h2 class="title">INDIVIDUAL MALE</h2>
          </div>
          <div class="price-card">
            <div class="card-image">
            <i class="fas fa-walking programIcon"></i>
            </div>
            <div class="card-content">
              <p>
              Are you the type of guys that feels insecure of their body whenever you go out partying or with girls?
              </p>
            </div>
            <div class="price"><p>Rs.23,800/-</p></div>
            <div class="card-button">
              <button class="purchase-now" onClick="location.href = './pages/register.php';">
                Purchase <br />
                now
              </button>
            </div>
          </div>
        </div>
        <div class="priceCard-section">
          <div class="title-container">
            <h2 class="title">INDIVIDUAL FEMALE</h2>
          </div>
          <div class="price-card">
            <div class="card-image">
            <i class="fas fa-child programIcon"></i>
            </div>
            <div class="card-content">
              <p>
              Ladies let’s get real here! Don’t we all want to pull off a bikini look? You do don’t you?
              </p>
            </div>
            <div class="price"><p>Rs.19,800/-</p></div>
            <div class="card-button">
              <button class="purchase-now" onClick="location.href = './pages/register.php';">
                Purchase <br />
                now
              </button>
            </div>
          </div>
        </div>
        <div class="priceCard-section">
          <div class="title-container">
            <h2 class="title">STUDENT</h2>
          </div>
          <div class="price-card">
            <div class="card-image">
            <i class="fas fa-biking programIcon"></i>
            </div>
            <div class="card-content">
              <p>
              We all have to start somewhere! So why not start at a young age when you have the time and energy for it!
              </p>
            </div>
            <div class="price"><p>Rs.16,000/-</p></div>
            <div class="card-button">
              <button class="purchase-now" onClick="location.href = './pages/register.php';">
                Purchase <br />
                now
              </button>
            </div>
          </div>
        </div>
        <div class="priceCard-section">
          <div class="title-container">
            <h2 class="title">Family</h2>
          </div>
          <div class="price-card">
            <div class="card-image">
            <i class="fas fa-dumbbell programIcon"></i>
            </div>
            <div class="card-content">
              <p>
              A good deal for you and your family to unite as one and work hard towards a common goal - TO GET IN SHAPE
              </p>
            </div>
            <div class="price"><p>Rs.39,500/-</p></div>
            <div class="card-button">
              <button class="purchase-now" onClick="location.href = './pages/register.php';" >
                Purchase <br />
                now
              </button>
            </div>
          </div>
        </div>
        <div class="priceCard-section">
          <div class="title-container">
            <h2 class="title">Monthly</h2>
          </div>
          <div class="price-card">
            <div class="card-image">
            <i class="fas fa-running programIcon"></i>
            </div>
            <div class="card-content">
              <p>
                Membership Card Health and Fitness Tips Personal Health Solution
                Monthly 2
              </p>
            </div>
            <div class="price"><p>Rs.6,000/-</p></div>
            <div class="card-button">
              <button class="purchase-now" onClick="location.href = './pages/register.php';">
                Purchase <br />
                now
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="trainer-Section">
      <h2 class="program-pricing"><span>our</span> trainers</h2>
      <div class="trainer-container">
        <div class="left arrow">
          <i class="fas fa-chevron-left"></i>
        </div>

        <div class="trainer-card">
          <img
            class="trainer-img"
            src="./Resources/resize/pexels-cesar-galeão-3289711.jpg"
            alt="Trainer image"
          />
          <h2 class="trainer-title">cesar galeão</h2>

          <div class="trainer-card1">
            <p>
              Dedicated fitness professional with a passion for improving client
              health, wellness and quality of life. Deliver high-energy training
              using the latest techniques in exercise science, cardio programs
              and strength training.
            </p>
          </div>
        </div>
        <!-- </div>
      <div class="trainer-container"> -->
        <div class="trainer-card">
          <img
            class="trainer-img"
            src="./Resources/resize/pexels-sabel-blanco-1480520.jpg"
            alt="Trainer image"
          />
          <h2 class="trainer-title">sabel blanco</h2>

          <div class="trainer-card1">
            <p>
              Dedicated fitness professional with a passion for improving client
              health, wellness and quality of life. Deliver high-energy training
              using the latest techniques in exercise science, cardio programs
              and strength training.
            </p>
          </div>
        </div>
        <!-- </div>

      <div class="trainer-container"> -->
        <div class="trainer-card">
          <img
            class="trainer-img"
            src="./Resources/resize/pexels-josef-pascal-1978505.jpg"
            alt="Trainer image"
          />
          <h2 class="trainer-title">josef pascal</h2>

          <div class="trainer-card1">
            <p>
              Dedicated fitness professional with a passion for improving client
              health, wellness and quality of life. Deliver high-energy training
              using the latest techniques in exercise science, cardio programs
              and strength training.
            </p>
          </div>
        </div>
        <div class="rigth arrow">
          <i class="fas fa-chevron-right"></i>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="quote">
        <div class="quote1">
          <i class="fas fa-quote-left"></i>
        </div>
        <div class="quoteLines">
          <h2>Be an Inspiration!</h2>
          <h2>Decide, Commit,</h2>
          <h2>Succeed</h2>
        </div>
        <div class="quote2">
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
      <div class="info-container">
        <div class="address">
          <div class="add-line1">
            <span>Address:</span> <br />
            No. 36 De Kretser Pl, <br />Colombo 00400
          </div>
          <div class="add-line2">
            <span>Phones:</span> <br />
            +94-112333444 <br />
            +94-112555666
          </div>
          <div class="add-line3">
            <span>Email:</span> <br />
            info@rathnayakagyms.com
          </div>
          <div class="add-line4">
            <span>Branches</span> <br />
            Kaduwela, Kottawa, Malabe and Avissawella
          </div>
        </div>
        <div class="social-media">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
        <div class="insta">
          <h2 class="insta-title">Instagram</h2>
          <div class="insta-gallery">
            <img src="./Resources/BeFunky-collage.jpg" alt="insta preview" />
          </div>
        </div>
        <div class="reg">
        <?php
          if($_SESSION["name"]) {
          ?>
            <button class='btn-signIn'><?php echo $_SESSION['name'];?></button>
          <?php
          }else echo "<button class='btn-signIn'>Sign In</button>";
          ?>
          <button class="btn-member" onClick="document.getElementById('Programs-Section').scrollIntoView();">Become a Member</button>
        </div>
      </div>
    </footer>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
      integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"
      integrity="sha512-2fk3Q4NXPYAqIha0glLZ2nluueK43aNoxvijPf53+DgL7UW9mkN+uXc1aEmnZdkkZVvtJZltpRt+JqTWc3TS3Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"
      integrity="sha512-5/OHwmQzDSBS0Ous4/hlYoWLHd06/d2r7LdKZQVBXOA6PvOqWVXtdboiLTU7lQTGyVoKVTNkwi0ol4gHGlw5ww=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="./script.js"></script>
  </body>
</html>
