<?php 
include('connection.php');
    // Delete Query For Student Table
    if(isset($_GET['hidden_id'])){
        $student_id = $_GET['hidden_id'];

        $division_id = "SELECT id FROM divisions where student_id=$student_id";
        $div_id_result = mysqli_query($con,$division_id);
        $row = mysqli_fetch_assoc($div_id_result);

        $teacher_divisions = "DELETE FROM teacher_divisions WHERE division_id=$row[id]";
        mysqli_query($con,$teacher_divisions);

        $division = "DELETE FROM divisions WHERE student_id=$student_id";
        mysqli_query($con,$division);

        $student = "DELETE FROM students WHERE id=$student_id";
        mysqli_query($con,$student);

        header('location:student.php');
    }
?>