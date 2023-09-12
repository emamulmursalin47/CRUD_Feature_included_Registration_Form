


<?php include("connection.php");
$id= $_GET['id'];
$query = "SELECT * FROM FORM where id='$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD OPERATIONS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    s
</head>
<body>
    

<div class="container">

<form action="#" method="POST">

    <div class="title"> 
        Update details
    </div>
    <div class="form">

        <div class="input_field">
         <label>First Name</label>
         <input type="text" value="<?php echo $result['fname']?>"class="input" name="fname"required >
        </div>
        <div class="input_field">
         <label>Last Name</label>
         <input type="text"value="<?php echo $result['lname']?>" class="input" name="lname" required>
        </div>
        <div class="input_field">
         <label>Password</label>
         <input type="password"value="<?php echo $result['password']?>" class="input" name="password"required >
        </div>
        <div class="input_field">
         <label>Confirm Password</label>
         <input type="password" value="<?php echo $result['cpassword']?>"class="input" name="conpassword"required >
        </div>
        <div class="input_field">
         <label>Gender</label>
         <div class="selectbox">


        <select class="selectbox" name="gender"required >
            <option values="Not selected">Select</options>

            <option values="Male"
            <?php
            if($result['gender']=='Male')
            {
                echo "selected";
            }
          
            ?>
            >
                
            Male</options>
            <option values="Female"
            <?php
            if($result['gender']=='Female')
            {
                echo "selected";
            }
          
            ?>
            >Female</options>
        </select>


        </div>
        </div>
        <div class="input_field">
         <label>Email</label>
         <input type="text" value="<?php echo $result['email']?>"class="input" name="email" required>
        </div>
        <div class="input_field">
         <label>Phone</label>
         <input type="text" value="<?php echo $result['phone']?>"class="input" name="phone"required >
        </div>
        <div class="input_field">
         <label>Address</label>
         <textarea class="text-area" name="address" required><?php echo $result['address']?></textarea>


        </div>
        <div class="input_field terms">
        <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <p>Agree to terms and conditions</p>
        </div>
<div class="input_field">
    <input type="submit" value="Update" class="btn" name="register">


    <a href="display.php" class="center-button">Get Students Database Here</a>
 <a href="form.php" class="center-button">Get Registration Form Here</a>

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
        
        $query = "UPDATE FORM SET fname='$fname', lname='$lname', password='$pwd', cpassword='$cpwd', gender='$gender', email='$email', phone='$phone', address='$address' WHERE id='$id'";


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
        
    }
}
?>

</body>

</html>

