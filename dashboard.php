<?php
$title = "Admin Panel";
$body = "Dashboard";
include('header.php');
require('connection.php');

//select query for count the data
$count_stu = "SELECT count(id) As Total FROM students";
$result_stu = mysqli_query($con, $count_stu);
$row_stu = mysqli_fetch_array($result_stu);

$count_teach = "SELECT count(id) As Total FROM teachers";
$result_teach = mysqli_query($con, $count_teach);
$row_teach = mysqli_fetch_array($result_teach);
?>
<div class="count-up">
    <div class="wrapper">
        <i class="fa fa-sharp fa-solid fa-graduation-cap"></i>
        <div class="counter" id="stu"></div>
    </div>
    <div class="wrapper">
        <i class="fa fa-solid fa-person-chalkboard"></i>
        <div class="counter" id="teach"></div>
    </div>
</div>
<?php
include('footer.php');
?>
<script>
    var counted1 = 0;
    var target1 = <?php echo $row_stu['Total']; ?>; // 10 seconds
    var i = setInterval(function() {
        var j = setInterval(function() {
            if (counted1 < target1) {
                counted1++;
                document.getElementById("stu").innerHTML = +counted1;
            } else {
                clearInterval(i);
            }
        }, 1000);
    }, 700);

    var counted2 = 0;
    var target2 = <?php echo $row_teach['Total']; ?>; // 10 seconds
    var i = setInterval(function() {
        var j = setInterval(function() {
            if (counted2 < target2) {
                counted2++;
                document.getElementById("teach").innerHTML = +counted2;
            } else {
                clearInterval(i);
            }
        }, 1000);
    }, 700);
</script>