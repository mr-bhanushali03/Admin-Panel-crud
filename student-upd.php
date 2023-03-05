<?php 
$title = "Admin Panel";
$body = "";
include('header.php');
require('connection.php');

// select query for update form Student table
if (isset($_GET['hidden_id'])) {
    $student_id = $_GET['hidden_id'];

    $select = "SELECT * FROM students WHERE id=$student_id";
    $result = mysqli_query($con, $select);
    $row    = mysqli_fetch_assoc($result);
    $languages = explode(",", $row['language']);
}

// Update query for update the student table
if (isset($_POST['submit'])) {
    $teacher_id = $_POST['hidden_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $languages = implode(',', $_POST['languages']);
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    if ($_FILES['file']['name'] == "") {
        $upd = "UPDATE `students` SET `name`='$name',`email`='$email',`language`='$languages',`gender`='$gender',`dob`='$dob',`city`='$city' WHERE id=$teacher_id";
        $sql = mysqli_query($con, $upd);
    }else {
        $file = $_FILES['file']['name'];
        $upd = "UPDATE `students` SET `name`='$name',`email`='$email',`file`='$file',`language`='$languages',`gender`='$gender',`dob`='$dob',`city`='$city' WHERE id=$teacher_id";
        $sql = mysqli_query($con, $upd);
    }
    if ($sql) {
        ?>
        <script>
            window.location.href = "student.php";
        </script>
        <?php
    }
}
?>

//update form from student
<div class="Page" style="margin: -100px 240px !important;">
    <div class="Box-header">
        <section class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center none">
                <div class="col-12">

                    <h1 class="text-white mb-4 form-anime">Hello User</h1>

                    <div class="card form-anime" style="border-radius: 15px;">
                        <div class="card-body" style="height: 760px !important;">
                            <form action="student-upd.php" method="post" enctype="multipart/form-data">
                                <div class="scroll">

                                    <div class="sticky">
                                        <h1 class="d-flex justify-content-center text-dark mb-4">Welcome</h1>

                                        <hr class="mx-n3">
                                    </div>
                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Full name</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" class="form-control form-control-lg" name="name" value="<?php echo $row['name']; ?>"/>

                                        </div>
                                    </div>
<input type="hidden" name="hidden_id" value="<?php echo $_GET['hidden_id']; ?>">
                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Email address</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="email" class="form-control form-control-lg" placeholder="example@example.com" name="email" value="<?php echo $row['email']; ?>"/>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label ps-4">
                                                <h4>Languages Known</h4>
                                            </label>
                                            <div class="row align-items-center">
                                                <div class="col-md-3 ps-5">

                                                    <h6 class="mb-0">English</h6>

                                                </div>
                                                <div class="col-md-9 pe-5">

                                                    <input type="checkbox" class="form-check-input" name="languages[]" value="English" <?php if (in_array('English',$languages)) {
                                                        echo "checked";
                                                    } ?>/>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-md-3 ps-5">

                                                    <h6 class="mb-0">Hindi</h6>

                                                </div>
                                                <div class="col-md-9 pe-5">

                                                    <input type="checkbox" class="form-check-input" name="languages[]" value="Hindi" <?php if (in_array('Hindi',$languages)) {
                                                        echo "checked";
                                                    } ?>/>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-md-3 ps-5">

                                                    <h6 class="mb-0">Gujarati</h6>

                                                </div>
                                                <div class="col-md-9 pe-5">

                                                    <input type="checkbox" class="form-check-input" name="languages[]" value="Gujarati" <?php if (in_array('Gujarati',$languages)) {
                                                        echo "checked";
                                                    } ?>/>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <label for="" class="form-label ps-4">
                                                <h4>Gender</h4>
                                            </label>
                                            <div class="form-check">
                                                <input class="form-check-input col-md-3 ms-3" type="radio" name="gender" id="Male" value="Male" <?php if ($row['gender'] == "Male") {
                                                    echo "checked";
                                                } ?>>
                                                <label class="form-check-label col-md-9 ms-3" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input col-md-3 ms-3" type="radio" name="gender" id="Female" value="Female" <?php if ($row['gender'] == "Female") {
                                                    echo "checked";
                                                } ?>>
                                                <label class="form-check-label col-md-9 ms-3" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input col-md-3 ms-3" type="radio" name="gender" id="Other" value="Other" <?php if ($row['gender'] == "Other") {
                                                    echo "checked";
                                                } ?>>
                                                <label class="form-check-label col-md-9 ms-3" for="flexRadioDefault3">
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Date Of Birth</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="date" name="dob" id="dob" placeholder="Date Of Birth" class="form-control" value="<?php echo $row['dob']; ?>">

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">City</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <select class="form-select" aria-label="Default select example" name="city">
                                                <option value="" <?php if ($row['city'] == null) {
                                                    echo "selected";
                                                } ?>>Select Your City</option>
                                                <option value="Daman" <?php if ($row['city'] == "Daman") {
                                                    echo "selected";
                                                } ?>>Daman</option>
                                                <option value="Vapi" <?php if ($row['city'] == "Vapi") {
                                                    echo "selected";
                                                } ?>>Vapi</option>
                                                <option value="Bhilad" <?php if ($row['city'] == "Bhilad") {
                                                    echo "selected"; 
                                                } ?>>Bhilad</option>
                                            </select>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Upload CV</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="file" type="file" name="file"/>
                                            <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                                                size 50 MB</div>

                                        </div>
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

//extra add for only onload page
<style>
    .display-block {
        display: none !important;
    }

    .Box-header {
        width: 105% !important;
    }
</style>
<script>
    document.getElementById("block").classList.add("display-block");
</script>
<?php
include('footer.php');
?>