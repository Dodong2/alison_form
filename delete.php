<?php
//including the database connection file
require './submit.php';

//getting id of the data from url
if(isset($_GET['id'])) {
    $id = $_GET['id'];
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM studentdb WHERE id=$id");

//redirecting to the display page (index.php in our case)

if($result) {
    header("Location: record.php");
    exit();
} else {
    echo "Error: Unable to delete record.";
}
} else {
    echo "Error: Invalid ID.";
}
?>