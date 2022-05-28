<?php
include_once("../../classes/crud.php");
// include_once("../../classes/Member.php");
// $member = new Member();


$insertdata=new DB_con(); 

$isIdExist = false;




if(isset($_POST['submit_1']) ){
    
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $addressLine1 = $_POST['addressline1'];
  $addressLine2 = $_POST['addressline2'];
  $gender = $_POST['gender'];
  $nic = $_POST['nic'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $dateOfBirth = $_POST['dob'];
  $emergencyContactPerson = $_POST['emergencyContactPerson'];
  $emergencyContactNo = $_POST['emergencyContactNo'];
  $package = $_POST['package'];
  $dateOfJoin = $_POST['doj'];
  $password = $_POST['password'];
  $category = $_POST['category'];
  $nextPayment = $_POST['nextPayment'];
  $paymentStatus = $_POST['paymentStatus'];
  $status = $_POST['userStatus'];


  $sql=$insertdata->update($firstName,$lastName ,$addressLine1,$addressLine2,$gender,$nic,
  $phone,$email ,$dateOfBirth,$emergencyContactPerson,$emergencyContactNo,$package,
  $dateOfJoin,$password ,$category,$nextPayment,$paymentStatus,$status);
  if($sql){
    echo "<script>alert('User updated');</script>";
  }
  else{
    echo "<script>alert('Unable to update user');</script>";
  }     
  
}

?>


<div id="option2" class="option_container admin" style="display: none">
  <form action="adminStruct.php" method="post" class="form_post" id = "memberUpdate" name = "memberUpdate">
    <div class="userDetail_container">
      <div class="detailLeft_container">
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
        <div class="input_container">
          <label for="category">category: </label>
          <select id="category" class = "category" name="category">
            <option value="member">Member</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="input_container">
          <label for="nextPayment">next payment: </label>
          <input type="text" name="nextPayment" id="nextPayment" />
        </div>
      </div>
      <div class="detailRight_container">
        <div class="input_container">
          <button
          type="button"
            class="search_user"
          >
            search
          </button>
          <select id="status" name="userStatus">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </div>

        <div class="input_container">
          <label><b>Gender: </b></label>
          <div class="gender">
            <input type="radio" value="Male" name="gender" id="gender" />
            <label for="male">Male</label>
          </div>
          <div class="gender">
            <input type="radio" value="Female" name="gender" id="gender" />
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
          <label for="password">password: </label>
          <input type="text" name="password" id="password" />
        </div>
        <div class="input_container">
          <label for="emergencyContactPerson">Emergency Contact Name: </label
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
        <div class="input_container">
          <label for="paymentStatus">payment status: </label>
          <input type="text" name="paymentStatus" id="paymentStatus" />
        </div>
      </div>
    </div>
    <div class="button_container">
      <button type="submit" name="submit_1" class="update_user" form = "memberUpdate" >Update</button>
      <button class="clear">Clear</button>
    </div>
  </form>

  <div class="userTable_container">
 
  </div>
</div>