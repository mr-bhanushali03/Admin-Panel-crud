<?php 
require('connection.php');
    if(isset($_GET['hidden_id'])){
        $id = $_GET['hidden_id'];
        $delete = "DELETE FROM students WHERE id=$id";
        $con = mysqli_query($con,$delete);
        header('location:student.php');
    }
?>