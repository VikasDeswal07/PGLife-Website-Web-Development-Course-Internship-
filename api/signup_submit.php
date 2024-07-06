<?php
//connect to database
require("../includes/database_connection");

// assigned variable
$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$college_name = $_POST['college_name'];
$gender = $_POST['gender'];

//first check user is exist or not
// Insert SQL query
$sql = "SELECT * FROM users WHERE email='$email'";

//check query in data 
$result=mysqli_query($conn,$sql);

//check if result is true or not
if(!$result){
    echo"Something went wrong";
    exit;
}

//if result is true , check user is exist or not
$row_count=mysqli_num_rows($result);
//if number of is not equal to zero that user already exits
if($row_count != 0){
    echo "This email id is already registered with us";
    exit;
}

//if not exist , insert it in database

$sql="INSERT INTO users (email,password,full_name,phone,gender,college_name) VALUES('$email','$password','$full_name','$phone',
'$gender','$college_name')";

//check query in data
$result=mysqli_query($conn,$sqli);
if(!$result){

    echo "Something went wrong";
    exit;
}
echo"Your account has been created successfully!";

?>
Click <a href="../index.php">here</a> to continue.
<?php
mysqli_close($conn);