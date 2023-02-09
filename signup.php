<?php
$title = "All Access";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato&display=swap"> -->
    <script src="https://kit.fontawesome.com/33b91abd2b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="Side-bar">
        <div class="Box-logo"><a href="index.php"> All Access</a></div>
        <div class="Box-menu">
            <ul class="ul-menu">
                <li class="li-mneu Active-menu">
                    <i class="fa fa-solid fa-arrow-right-from-bracket"></i>
                    <div class="title-menu"><a href="index.php">Log In</a></div>
                </li>
                <li class="li-mneu">
                    <i class="fa fa-solid fa-user-plus"></i>
                    <div class="title-menu"><a href="signup.php">Sign UP</a></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="Page">
        <div class="Box-header">
            <section class="container-fluid">
                <div class="row d-flex justify-content-center align-items-center none">
                    <div class="col-12">

                        <h1 class="text-white mb-4">Hello User</h1>

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body" style="height: 820px !important;">
                                <div class="scroll">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Full name</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" class="form-control form-control-lg" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Email address</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="email" class="form-control form-control-lg" placeholder="example@example.com" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Password</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="password" class="form-control form-control-lg" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="form-label ps-4">
                                                <h4>Languages Known</h4>
                                            </label>
                                            <div class="row align-items-center pt-4 pb-3">
                                                <div class="col-md-3 ps-5">

                                                    <h6 class="mb-0">Language</h6>

                                                </div>
                                                <div class="col-md-9 pe-5">

                                                    <input type="checkbox" class="form-check-input" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Full name</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <textarea class="form-control" rows="3" placeholder="Message sent to the employer"></textarea>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Upload CV</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="formFileLg" type="file" />
                                            <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                                                size 50 MB</div>

                                        </div>
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Send application</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    <style>
        .scroll{
            max-height  : 620px;
            overflow-y: scroll;
        }
    </style>
</body>

</html>