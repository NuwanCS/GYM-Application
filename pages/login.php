
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>LogIn</title>
  </head>
  <body>
    <section class="login-cover">
      <form action="login.php" method="post" class="login-container">
        <div  class="logo-img">
          <img src="../Resources/Vector.svg" alt="logo" />
          <h4>Rathnayke GYMS</h4>
        </div>

        <div class="main-buttons">
          <a href="../pages/register.php">Register</a>
          <a href="../index.php">Home</a>
        </div>

        <div class="user_input">
          <input type="text" class="login_input" placeholder="Email" required name="login_input"
            id="login_input"/>
          <input
            type="password"
            class="login_input"
            placeholder="Password"
            name="password"
            id="password"
            required

          />
        </div>

        <div class="login_btn">
          <button class="login" type="submit" name = "submit">
            
            Login </button>
        </div>
      </form>
    </section>
  </body>
</html>

<?php
include_once("../classes/crud.php");



$insertdata=new DB_con(); 

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data; 
}
if(isset($_POST['submit'])) 
{     

    $name = test_input($_POST["login_input"]); 
    $password = test_input($_POST["password"]); 

    $result = $insertdata->loginMatch($name, $password );

    

    $row  = mysqli_fetch_array($result);

        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['firstName'];
        } else {
          echo "<script>alert('The username or password are incorrect!');</script>";
        }

    // if($result )
    // { 
    //     $_SESSION["logged_in"] = true; 
    //     $_SESSION["loggedInName"] = $sql; 
    //     echo "<script>alert('Welcome!');</script>";
    //     header("Location: ../index.php");
    // }
    // else
    // {
    //   echo "<script>alert('The username or password are incorrect!');</script>";
    // }

    
}
if(isset($_SESSION["id"])) {
  header("Location: ../index.php");
  }


?>