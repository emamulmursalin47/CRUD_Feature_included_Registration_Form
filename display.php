<html>
    <head>
        <title>Display</title>
        <style>
            body {
                background-color: beige;
            }
            table {
                background-color: white;
            }
            .update{
                background-color: green;
                color: white;
                border-radius: 5px;
            }
            .delete{
                background-color: red;
                color: white;
                border-radius: 5px;
            }
            .center-button{
                background-color: #648509;
    width: 50%;
   padding: 6px 10px;
   font-size: 15px;
   margin-left: 5px;
   margin-top: 10px;
   color:white;
   
            }
        </style>
    </head>
    <body>
        <?php
        include("connection.php");
        error_reporting(0);
        $query = "SELECT * FROM FORM";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);

        if ($total != 0) {
        ?>
        <h2 align="center">Display All Records</h2>
        <table border="3px" cellspacing="7" width="100%">
            <tr>
                <th width="5%">ID</th>
                <th width="10%">First Name</th>
                <th width="10%">Last Name</th>
                <th width="5%">Gender</th>
                <th width="15%">Email</th>
                <th width="10%">Phone</th>
                <th width="20%">Address</th>
                <th width="20%">Operations</th>
            </tr>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                    <td>" . $result["id"] . "</td>
                    <td>" . $result["fname"] . "</td>
                    <td>" . $result["lname"] . "</td>
                    <td>" . $result["gender"] . "</td>
                    <td>" . $result["email"] . "</td>
                    <td>" . $result["phone"] . "</td>
                    <td>" . $result["address"] . "</td>
                    <td> <a href='update_design.php?id=" . $result["id"] . "
                    '><input type='submit' value='Update' class='update'</a>

                   <a href=delete.php?id=" . $result["id"] . "
                    '><input type='submit' value='Delete' class='delete'</a></td>
                </tr>";
            }
            ?>
        </table>
        <?php
        } else {
            echo "No records found";
        }
        ?>
         <a href="index.php" class="center-button">Go to homepage</a>
         <div class="footer">
    <p>&copy; <?php echo date("Y"); ?> Md. Emamul Mursalin. All rights reserved.</p>
</div>
    </body>
   
</html>
