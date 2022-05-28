<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="../style/style.css" />
    <title>Shop</title>
  </head>
  <body>
    <div class="app">
      <header class="about-header profile-header">
        <nav class="about-nav">
          <div class="logo-img">
            <img src="../Resources/Vector.svg" alt="logo" />
            <h4>Rathnayke GYMS</h4>
          </div>
          <ul class="scroll-navigation">
            <li><a class="active" href="../index.php">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../about.php">Gallery</a></li>
            <li><a href="../contactUs.php">Contact Us</a></li>
            <?php
          if($_SESSION["name"]) {
          ?>
          <li><a href='./pages/account.html'><?php echo $_SESSION["name"]; ?></a></li>

          <?php
          }else echo "<li><a href='./pages/login.php'>Sign in</a></li>";
          ?>
          </ul>
        </nav>
      </header>
      <section class="profile">
        <div id="option2" class="option_container admin">
          <form class="form_post">
            <div class="userDetail_container">
              <div
                action="account.html"
                method="post"
                id="memberUpdate"
                name="memberUpdate"
                class="detailLeft_container"
              >
                <div class="input_container">
                  <label for="nic">NIC: </label>
                  <input type="text" name="nic" id="nic" />
                </div>

                <div class="input_container">
                  <label for="firstName">First Name: </label>
                  <input type="text" name="firstName" id="firstName" />
                </div>
                <div class="input_container">
                  <label for="lastName">Last Name: </label>
                  <input type="text" name="lastName" id="lastName" />
                </div>
                <div class="input_container">
                  <label for="doj">date of join: </label>
                  <input type="text" name="doj" id="doj" />
                </div>
                <div class="input_container">
                  <label for="package">package: </label>
                  <input type="text" name="package" id="package" />
                </div>
                <div class="input_container">
                  <label for="addressline1">addressline 1: </label>
                  <input type="text" name="addressline1" id="addressline1" />
                </div>
                <div class="input_container">
                  <label for="addressline2">addressline 2: </label>
                  <input type="text" name="addressline2" id="addressline2" />
                </div>
               
              </div>
              <div class="detailRight_container">

                 <div class="input_container">
                  <label><b>Gender: </b></label>
                  <div class="gender">
                    <input
                      type="radio"
                      value="Male"
                      name="gender"
                      id="gender"
                      class="genderf"
                    />
                    <label for="male">Male</label>
                  </div>
                  <div class="gender">
                    <input
                      type="radio"
                      value="Female"
                      name="gender"
                      id="gender"
                      class="genderf"
                    />
                    <label for="female">Female</label>
                  </div>
                </div>
                <div class="input_container">
                  <label for="dob">DOB: </label>
                  <input type="text" name="dob" id="dob" />
                </div>
                <div class="input_container">
                  <label for="phone">Contact Number: </label>
                  <input type="text" name="phone" id="phone" />
                </div>
                <div class="input_container">
                  <label for="email">email: </label>
                  <input type="text" name="email" id="email" />
                </div>
                <div class="input_container">
                  <label for="emergencyContactPerson"
                    >Emergency Contact Name: </label
                  ><input
                    type="text"
                    name="emergencyContactPerson"
                    id="emergencyContactPerson"
                  />
                </div>
                <div class="input_container">
                  <label for="emergencyContactNo">Emergency Contact #: </label>
                  <input
                    type="text"
                    name="emergencyContactNo"
                    id="emergencyContactNo"
                  />
                </div>
                <div class="button_container">
              <button
                type="submit"
                name="submit_1"
                class="update_user"
                form="memberUpdate"
              >
                Update
              </button>
              <button class="clear">Clear</button>
            </div>
              </div>
            </div>
            
          </form>
        </div>
      </section>

        
      <hr>     
   
    <footer class="footer-account">
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
            <img src="../Resources/BeFunky-collage.jpg" alt="insta preview" />
          </div>
        </div>
        <div class="reg">

        <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
        </div>
      </div>
    </footer>
    </div>
  </body>
</html>

<?php
include_once("../classes/crud.php");



$insertdata=new DB_con(); 
   

    $user = $_SESSION["id"]; 

    $result = $insertdata->searchAll($user );

    

    $row  = mysqli_fetch_array($result);

        if(is_array($row)) {
          echo "
          <script type=\"text/javascript\">
          document.querySelector('#nic').value =  '$row[nic]';
          document.querySelector('#firstName').value =  '$row[firstName]';
          document.querySelector('#lastName').value = '$row[lastName]';
          document.querySelector('#doj').value = '$row[dateOfJoin]';
          document.querySelector('#addressline1').value = '$row[addressLine1]';
          document.querySelector('#addressline2').value = '$row[addressLine2]';
          document.querySelector('.genderf').checked = '$row[gender]';
          document.querySelector('#dob').value = '$row[dateOfBirth]';
          document.querySelector('#phone').value = '$row[phone]';
          document.querySelector('#package').value = '$row[package]';
          document.querySelector('#email').value = '$row[email]';
          document.querySelector('#emergencyContactPerson').value =
          '$row[emergencyContactPerson]';
          document.querySelector('#emergencyContactNo').value =
          '$row[emergencyContactNo]';       
          </script>
      ";
        } else {
          echo "<script>alert('Unable to update user details');</script>";
        }

    

        

?>


