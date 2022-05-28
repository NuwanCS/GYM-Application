

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Register</title>
  </head>
  <body>
    <header class="about-header">
      <nav class="about-nav">
        <div class="logo-img">
          <img src="../Resources/Vector.svg" alt="logo" />
          <h4>Rathnayke GYMS</h4>
        </div>
        <ul class="scroll-navigation">
          <li><a class="active" href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Sign in</a></li>
        </ul>
      </nav>
    </header>
    <section class="reg-cover">
      <img src="../Resources/signIn/cover3.png" alt="" />
      <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> -->
      <form action="register.php" method="post">
        <h2>
          let's get
          <span>started</span>
        </h2>
        <div class="reg-container">
          <hr />

          <!-- <label for="email"><b>Email</b></label> -->
          <input
            type="text"
            placeholder="Enter First Name"
            name="firstName"
            id="email"
            required
          />

          <!-- <label for="psw-repeat"><b>Repeat Password</b></label> -->
          <input
            type="text"
            placeholder="Enter NIC"
            name="nic"
            id="psw-repeat"
            required
          />

          <div class="gender" >
            <label><b>Gender: </b></label>
            <div class="male">
              <input type="radio" value="Male" name="gender" id="male" required />
              <label for="male">Male</label>
            </div>
            <div class="female">
              <input type="radio" value="Female" name="gender" id="female" required />
              <label for="female">Female</label>
            </div>
          </div>

          <input
            type="text"
            placeholder="Enter Contact No"
            name="phone"
            id="psw-repeat"
            required
          />

          <input
            type="text"
            placeholder="Enter Email"
            name="email"
            id="psw-repeat"
            required
          />

          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            id="psw-repeat"
            required
          />

          <input
            type="password"
            placeholder="Repeat Password"
            name="rptPassword"
            id="psw-repeat"
            required
          />
          <hr />
          <p>
            By creating an account you agree to our
            <a href="#">Terms & Privacy</a>.
          </p>

          <button type="submit" name = "submit" class="registerbtn">Register</button>
        </div>
      </form>
    </section>
  </body>
</html>

<?php
include_once("../classes/crud.php");



$insertdata=new DB_con(); 

  if(isset($_POST['submit'])){
    $input = $_POST['email'];
    $inputNIC = $_POST['nic'];
    $result = $insertdata->search($input);
    $resultNIC = $insertdata->searchNic($inputNIC);
    $num=mysqli_num_rows($result);
    $nicExist=mysqli_num_rows($resultNIC);
    if($num <= 0 && $nicExist <= 0){
      $firstName = $_POST['firstName'];
      $password = $_POST['password'];
      $gender = $_POST['gender'];
      $nic = $_POST['nic'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
    
      $sql=$insertdata->insert($firstName,$password ,$gender,$nic,$phone,$email);
      if($sql){
        echo "<script>alert('Welcome to the family');</script>";
      }
      else{
        echo "<script>alert($sql);</script>";
      }     
  }else{
    echo "<script>alert('User availble for this email or NIC');</script>";
  }
}

?>