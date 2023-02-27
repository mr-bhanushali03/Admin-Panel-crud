<?php
$title = "Admin Panel";
$body = "Student";
include('header.php');
?>
<div class="create">
    <button type="button" class="btn btn-primary" data-target="#myModal" data-toggle="modal">Create</button>
</div>
<div class="Page modal" id="myModal" style="border-radius: 60px 60px 60px 60px;" data-dismiss="modal">
    <div class="Box-header">
        <section class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center none">
                <div class="col-12">

                    <h1 class="text-white mb-4 form-anime">Hello User</h1>

                    <div class="card form-anime" style="border-radius: 15px;">
                        <div class="card-body" style="height: 760px !important;">
                            <form action="" method="post" enctype="multipart/form-data">
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

                                            <input type="text" class="form-control form-control-lg" name="name" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Email address</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="email" class="form-control form-control-lg" placeholder="example@example.com" name="email" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Password</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="password" class="form-control form-control-lg" name="password" />

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

                                                    <input type="checkbox" class="form-check-input" name="languages[]" value="English" />
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-md-3 ps-5">

                                                    <h6 class="mb-0">Hindi</h6>

                                                </div>
                                                <div class="col-md-9 pe-5">

                                                    <input type="checkbox" class="form-check-input" name="languages[]" value="Hindi" />
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-md-3 ps-5">

                                                    <h6 class="mb-0">Gujarati</h6>

                                                </div>
                                                <div class="col-md-9 pe-5">

                                                    <input type="checkbox" class="form-check-input" name="languages[]" value="Gujarati" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <label for="" class="form-label ps-4">
                                                <h4>Gender</h4>
                                            </label>
                                            <div class="form-check">
                                                <input class="form-check-input col-md-3 ms-3" type="radio" name="gender" id="Male" value="Male">
                                                <label class="form-check-label col-md-9 ms-3" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input col-md-3 ms-3" type="radio" name="gender" id="Female" value="Female">
                                                <label class="form-check-label col-md-9 ms-3" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input col-md-3 ms-3" type="radio" name="gender" id="Other" value="Other">
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

                                            <input type="date" name="dob" id="dob" placeholder="Date Of Birth" class="form-control">

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">City</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <select class="form-select" aria-label="Default select example" name="city">
                                                <option selected>Select Your City</option>
                                                <option value="Daman">Daman</option>
                                                <option value="Vapi">Vapi</option>
                                                <option value="Bhilad">Bhilad</option>
                                            </select>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Upload CV</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="file" type="file" name="file" />
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
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>Thornton</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<?php
include('footer.php');
?>