<?php
include('connection.php');
$id = $_GET['id'];

// Use a prepared statement to avoid SQL injection
$query = "DELETE FROM FORM WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
   
    mysqli_stmt_bind_param($stmt, "i", $id);
    if (mysqli_stmt_execute($stmt)) {
        echo  "<script>alert('Database has been Updated')</Script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
    <?php
    } else {
        echo "Failed To Delete";
    }

  
    mysqli_stmt_close($stmt);
} else {
    echo "Failed to prepare statement";
}


?>
