
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../style/style.css" />
    <title>Rathnayaka GYMS</title>
  </head>
  <body>
    <div class="app">
      <nav class="sideNav">
        <div class="sideNav_logo">
          <div class="logo-img">
            <img src="../../Resources/Vector.svg" alt="logo" />
          </div>
          <div class="btn_logout">
            <button class="logout">logout</button>
          </div>
        </div>

        <div class="sideNav_avatar">
          <div class="avatar_info">
            <i class="fas fa-user-plus"></i>
          </div>
          <h4>Nuwan</h4>
        </div>
        <div class="sideNav_options">
 
           <!-- $title = "dashboard"; -->
          <!-- include "optionComponent.php" -->
          
          <button id = "dash" class = "option" onClick="showHide('option1')">dashboard</button>
          <button id = "progress" class = "option" onClick="showHide('option2')">user management</button>
          <button id = "dash" class = "option" onClick="showHide('option3')">package management</button>
          <button id = "dash"class = "option" onClick="showHide('option4')"> store management</button>
          <button id = "dash"class = "option" onClick="showHide('option4')"> account</button>
        </div>
      </nav>
      <section class="dashboard">
        <?php 
        include "adminDash.php" 
        ?>
        <?php 
        include "adminUserMgt.php"; 
        
        //open connection to mysql db
        $connection = mysqli_connect("localhost","root","","db_rathnayakagyms") or die("Error " . mysqli_error($connection));

        //fetch table rows from mysql db
        $sql = "select * from members";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));


        
        //create an array
        $emparray = array();
        while($row =mysqli_fetch_assoc($result))
        {
            $emparray[] = $row;
        }
        $memberData  = json_encode($emparray, true);

        // echo $memberData;
        //close the db connection
        mysqli_close($connection);?>


        <?php 
        include "adminPckgMgt.php";
        //open connection to mysql db
        $connectionPkg = mysqli_connect("localhost","root","","db_rathnayakagyms") or die("Error " . mysqli_error($connectionPkg));

        //fetch table rows from mysql db
        $sqlpkg = "select packageID,packageName,packagePrice,packageCategory,packagePoint1,packagePoint2,packageStatus from packages";
        $resultpkg = mysqli_query($connectionPkg, $sqlpkg) or die("Error in Selecting " . mysqli_error($connectionPkg));

        //create an array
        $emparraypkg = array();
        while($rowPkg =mysqli_fetch_assoc($resultpkg))
        {
            $emparraypkg[] = $rowPkg;
        }
        $packageData  = json_encode($emparraypkg, true);

        // echo $packageData;
        //close the db connection
        mysqli_close($connectionPkg);?>
        <?php 
        include "adminStoreMgt.php" ?>
      </section>
      
    </div>

    <script src="./app.js">
  </script>
  <script>
    loadJsonFromPHP(<?php echo $memberData ?>);
    searchMember(<?php echo $memberData ?>);
    searchPackageID(<?php echo $packageData ?>);
    insertPackageData(<?php echo $packageData ?>)
    
  </script>
 
  </body>
</html>
