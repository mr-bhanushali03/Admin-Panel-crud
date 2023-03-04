<?php 
include('connection.php');
    // Delete Query For Student Table
    if(isset($_GET['hidden_id'])){
        $teacher_id = $_GET['hidden_id'];

        $division_id = "SELECT id FROM divisions where teacher_id=$teacher_id";
        $div_id_result = mysqli_query($con,$division_id);
        $row = mysqli_fetch_assoc($div_id_result);

        $teacher_divisions = "DELETE FROM teacher_divisions WHERE division_id=$row[id]";
        mysqli_query($con,$teacher_divisions);

        $division = "DELETE FROM divisions WHERE teacher_id=$teacher_id";
        mysqli_query($con,$division);

        $teacher = "DELETE FROM teachers WHERE id=$teacher_id";
        mysqli_query($con,$teacher);

        header('location:teacher.php');
    }
?>