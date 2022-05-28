<?php
include_once("../../classes/crud.php");
// include_once("../../classes/Member.php");
// $member = new Member();


$insertdata=new DB_con(); 

if(isset($_POST['submit_2'])){
    
  $packageName = $_POST['packageName'];
  $packagePrice = $_POST['packagePrice'];
  $packageCategory = $_POST['packageCategory'];
  $packagePoint1 = $_POST['packagePoint1'];
  $packagePoint2 = $_POST['packagePoint2'];
  $packageStatus = $_POST['packageStatus'];
  $packageID = $_POST['id'];


  $sql=$insertdata->insertPckgDetail($packageID,$packageName,$packagePrice ,$packageCategory,$packagePoint1,$packagePoint2,$packageStatus);
  if($sql){
    echo "<script>alert('Package Added');</script>";
    
  }
  else{
    echo "<script>alert('Unable add package');</script>";
  }     
  
}

?>
<div id = "option3" class="option_container admin2" style="display: none">
    <form action="adminStruct.php" method="post"  class="top_container" id = "packages" name = "packages">
        <div class="image_container"></div>
        <div class="detail_container">
            <div class="input_container">
                <label for="id">ID:
                </label> <input type="text" name="id" id="id">
                <button type="button"  class="search byID" onClick="searchPackageID">Search</button>
            </div>  
            <div class="input_container">
                <label for="packageName">Pacakge Name:
                </label> <input type="text" name="packageName" id="packageName" >
                <button type="button" class="search byPkgName">Search</button>
            </div>
            <div class="input_container">
                <label for="packagePrice">Price:
                </label> <input type="text" name="packagePrice" id="packagePrice" >
            </div>
            <div class="input_container">
                <label for="packageCategory">Category:
                </label> <input type="text" name="packageCategory" id="packageCategory" >
            </div>
            <div class="input_container">
                <label for="packagePoint1">Point 1:
                </label> <input type="text" name="packagePoint1" id="packagePoint1" >
            </div>
            <div class="input_container">
                <label for="packagePoint2">Point 2:
                </label> <input type="text" name="packagePoint2" id="packagePoint2" >
            </div>
            <div class="input_container">
                <label for="packageStatus">Status:
                </label> <input type="text" name="packageStatus" id="packageStatus" >
            </div>  
            <div class="button_container">
            
            <button type="submit" name="submit_2" form = "packages" >Add</button>
            <button type="submit" class="update" value = "disabled" disabled>Update</button>
            <button class="clear">Clear</button>
        </div>
        </div>
        
    
    </form>
    
    <div class="bottom_container pckgTable">
        
    </div>
</div>