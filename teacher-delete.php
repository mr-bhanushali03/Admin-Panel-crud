<?php 
include('connection.php');
    // Delete Query For Student Table
    if(isset($_GET['hidden_id'])){
        $student_id = $_GET['hidden_id'];
        $delete = "DELETE FROM teachers WHERE id=$student_id";
        $con = mysqli_query($con,$delete);
        header('location:teacher.php');
    }
?>