<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:green;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color:rgb(90, 172, 243);
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
            padding: 100px;
            width: 1000px;
            text-align: center;
           
        }
        .button-container {
    text-align: center;
}
.center-button {
    display: inline-block;
    padding: 10px 20px;
    background-color:orange; /* You can change the background color as needed */
    color: black; /* Text color */

    text-decoration: none;
    border-radius: 5px;
    margin: 10px; /* Adjust as needed */
    color: console.log('object :>> ', object);;
}
        h1 {
            padding-bottom: 100px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        p{
            font-size: 24px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            width: 200px;
            border-radius: 5px;
            display: block;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           
        }

        a:hover {
            background-color: #0056b3;
        }
       
    </style>
</head>
<body>
<div class="card">
    <img src="logo.png" alt="Bauet Logo" class="logo" style="width: 100px; height: auto;">

    <h1>Bangladesh Army University of Engineering & Technology(BAUET)</h1>
    <p>Get Your Registration Form by Clicking on the Button</p>
    
    <div class="button-container">
        <a href="form.php" class="center-button">Get Registration Form</a>
        <p>See Registered Students Information</p>
        <a href="display.php" class="center-button">Get Students Database Here</a>
    </div>
</div>
<div class="footer">
    <p>&copy; <?php echo date("Y"); ?> Md. Emamul Mursalin. All rights reserved.</p>
</div>
</body>

</html>
