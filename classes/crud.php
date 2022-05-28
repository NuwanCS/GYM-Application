<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'db_rathnayakagyms');
class DB_con{
	function __construct(){
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->dbh=$con;
            // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
	}
	public function insert($firstName,$password ,$gender,$nic,$phone,$email ){
        $ret=mysqli_query($this->dbh,"insert into members(firstName,password,gender,nic,phone,email) 
        values('$firstName','$password','$gender','$nic','$phone','$email')");
	    return $ret;
	}
    public function update($firstName,$lastName ,$addressLine1,$addressLine2,$gender,$nic,
    $phone,$email ,$dateOfBirth,$emergencyContactPerson,$emergencyContactNo,$package,
    $dateOfJoin,$password ,$category,$nextPayment,$paymentStatus,$status){
        $ret=mysqli_query($this->dbh,"update members set firstName = '$firstName',
        lastName = '$lastName',
        addressLine1 = '$addressLine1',
        addressLine2 = '$addressLine2',
        gender = '$gender',
        nic = '$nic',
        phone = '$phone',
        email = '$email',
        dateOfBirth = '$dateOfBirth',
        emergencyContactPerson = '$emergencyContactPerson',
        emergencyContactNo = '$emergencyContactNo',
        package = '$package',
        dateOfJoin = '$dateOfJoin',
        memberPassword = '$password',
        category = '$category',
        nextPayment = '$nextPayment',
        paymentStatus= '$paymentStatus',
        memberStatus= '$status' 
        where nic = '$nic'");
	    return $ret;
	}

    public function loginMatch($name, $password){
        //select all data
        $sql = mysqli_query($this->dbh,"SELECT * FROM members WHERE email = '$name' AND  memberPassword = '$password'");
  
        return $sql;
    }

    public function insertPackage($packageID,$packageName,$packagePrice ,$packageCategory,$packagePoint1,$packagePoint2,$packageStatus ){
        $ret=mysqli_query($this->dbh,"insert into members(packageID,packageName,packagePrice,packageCategory,packagePoint1,packagePoint2,packageStatus) 
        values('$packageID','$packageName','$packagePrice','$packageCategory','$packagePoint1','$packagePoint2','$packageStatus')");
	    return $ret;
	}
    public function search($input){
        //select all data
        $sql = mysqli_query($this->dbh,"SELECT email FROM members WHERE email='$input'");
  
        return $sql;
    }

    public function searchNic($input){
        //select all data
        $sql = mysqli_query($this->dbh,"SELECT nic FROM members WHERE nic='$input'");
  
        return $sql;
    }

    public function searchAll($input){
        //select all data
        $sql = mysqli_query($this->dbh,"SELECT * FROM members WHERE id='$input'");
  
        return $sql;
    }

    public function insertPckgDetail($packageName,$packagePrice ,$packageCategory,$packagePoint1,$packagePoint2,$packageStatus ){
        $ret=mysqli_query($this->dbh,"insert into packages(packageName,packagePrice,packageCategory,packagePoint1,packagePoint2,packageStatus) 
        values('$packageName','$packagePrice','$packageCategory','$packagePoint1','$packagePoint2','$packageStatus')");
	    return $ret;
	}
} 
?>