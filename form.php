

<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD OPERATIONS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    

<div class="container">

<form action="#" method="POST">

    <div class="title"> 
        Registration Form
    </div>
    <div class="form">

        <div class="input_field">
         <label>First Name</label>
         <input type="text" class="input" name="fname"required >
        </div>
        <div class="input_field">
         <label>Last Name</label>
         <input type="text" class="input" name="lname" required>
        </div>
        <div class="input_field">
         <label>Password</label>
         <input type="password" class="input" name="password"required >
        </div>
        <div class="input_field">
         <label>Confirm Password</label>
         <input type="password" class="input" name="conpassword"required >
        </div>
        <div class="input_field">
         <label>Gender</label>
         <div class="selectbox">
        <select class="selectbox" name="gender"required >
            <option values="Not selected">Select</options>
            <option values="Male">Male</options>
            <option values="Female">Female</options>
        </select>
        </div>
        </div>
        <div class="input_field">
         <label>Email</label>
         <input type="text" class="input" name="email" required>
        </div>
        <div class="input_field">
         <label>Phone</label>
         <input type="text" class="input" name="phone"required >
        </div>
        <div class="input_field">
         <label>Address</label>
          <textarea class="text-area" name="address" required></textarea>
        </div>
        <div class="input_field terms">
        <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <p>Agree to terms and conditions</p>
        </div>
<div class="input_field">
    <input type="submit" value="Registration" class="btn" name="register">
</div>
</div>
</form>
<div class="footer">
    <p>&copy; <?php echo date("Y"); ?> Md. Emamul Mursalin. All rights reserved.</p>
</div>
</div>




<?php
if(isset($_POST['register']))
{
    $fname   =  $_POST['fname'];
    $lname   =  $_POST['lname'];
    $pwd     =  $_POST['password'];
    $cpwd    =  $_POST['conpassword'];
    $gender  =  $_POST['gender'];
    $email   =  $_POST['email'];
    $phone   =  $_POST['phone'];
    $address =   $_POST['address'];
    
    if($fname != "" && $lname != "" && $pwd != "" && $cpwd != "" && $gender != "" && $phone != "" && $address != "")
    {
        $query = "INSERT INTO FORM (fname, lname, password, cpassword, gender, email, phone, address)
        VALUES ('$fname', '$lname', '$pwd', '$cpwd', '$gender', '$email', '$phone', '$address')";


$data = mysqli_query($conn, $query);


if($data){
    echo  "<script>alert('Database has been Updated')</Script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
    <?php
}
else{
    echo "Data insertion failed: ";
}
    }
    else
    {
        echo "Please fill all the fields"; 
    }
}
?>
</body>


</html>

