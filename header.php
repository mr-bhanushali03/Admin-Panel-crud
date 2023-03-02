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
                    <i class="fa fa-brands fa-redhat"></i>
                    <div class="title-menu"><a href="dashboard.php">Dashboard</a></div>
                </li>
                <li class="li-mneu">
                    <i class="fa fa-sharp fa-solid fa-graduation-cap"></i>
                    <div class="title-menu"><a href="student.php">Student</a></div>
                </li>
                <li class="li-mneu">
                    <i class="fa fa-solid fa-person-chalkboard"></i>
                    <div class="title-menu">Teacher</div>
                </li>
                <!-- <li class="li-mneu">
                    <i class="fa fa-solid fa-school"></i>
                    <div class="title-menu">School</div>
                </li> -->
                <!-- <li class="li-mneu">
                    <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512">
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet" />
                        <path d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z" />
                        <path d="M21.294,13.9l-.444-.256a9.1,9.1,0,0,0,0-3.29l.444-.256a3,3,0,1,0-3-5.2l-.445.257A8.977,8.977,0,0,0,15,3.513V3A3,3,0,0,0,9,3v.513A8.977,8.977,0,0,0,6.152,5.159L5.705,4.9a3,3,0,0,0-3,5.2l.444.256a9.1,9.1,0,0,0,0,3.29l-.444.256a3,3,0,1,0,3,5.2l.445-.257A8.977,8.977,0,0,0,9,20.487V21a3,3,0,0,0,6,0v-.513a8.977,8.977,0,0,0,2.848-1.646l.447.258a3,3,0,0,0,3-5.2Zm-2.548-3.776a7.048,7.048,0,0,1,0,3.75,1,1,0,0,0,.464,1.133l1.084.626a1,1,0,0,1-1,1.733l-1.086-.628a1,1,0,0,0-1.215.165,6.984,6.984,0,0,1-3.243,1.875,1,1,0,0,0-.751.969V21a1,1,0,0,1-2,0V19.748a1,1,0,0,0-.751-.969A6.984,6.984,0,0,1,7.006,16.9a1,1,0,0,0-1.215-.165l-1.084.627a1,1,0,1,1-1-1.732l1.084-.626a1,1,0,0,0,.464-1.133,7.048,7.048,0,0,1,0-3.75A1,1,0,0,0,4.79,8.992L3.706,8.366a1,1,0,0,1,1-1.733l1.086.628A1,1,0,0,0,7.006,7.1a6.984,6.984,0,0,1,3.243-1.875A1,1,0,0,0,11,4.252V3a1,1,0,0,1,2,0V4.252a1,1,0,0,0,.751.969A6.984,6.984,0,0,1,16.994,7.1a1,1,0,0,0,1.215.165l1.084-.627a1,1,0,1,1,1,1.732l-1.084.626A1,1,0,0,0,18.746,10.125Z" />
                    </svg>
                    <div class="title-menu">Setting</div>
                </li> -->
                <li class="li-mneu logout">
                    <i class="fa fa-solid fa-power-off"></i>
                    <div class="title-menu"><a href="index.php">Logout</a></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="Page">
        <div class="Box-header" id="block">
            <div class="Box-search">
                <svg class="icon-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                    <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                    <style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style" />
                    <style xmlns="" lang="en" type="text/css" id="dark-mode-native-style" />
                    <style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet" />
                    <g fill="none" fill-rule="evenodd">
                        <path d="m0 0h32v32h-32z" />
                        <path d="m15 0c8.2842712 0 15 6.71572875 15 15 0 3.7823596-1.3999424 7.2377452-3.7099407 9.8762702l5.3667949 5.3663705-1.4142135 1.4142135-5.3663705-5.3667949c-2.638525 2.3099983-6.0939106 3.7099407-9.8762702 3.7099407-8.28427125 0-15-6.7157288-15-15 0-8.28427125 6.71572875-15 15-15zm0 2c-7.17970175 0-13 5.82029825-13 13 0 7.1797017 5.82029825 13 13 13 7.1797017 0 13-5.8202983 13-13 0-7.17970175-5.8202983-13-13-13z" fill="white" fill-rule="nonzero" />
                    </g>
                </svg>
                <input class="input-search" placeholder="Search" type="text">
            </div>
            <div class="box-alert-infomation">
                <div class="box-alert">
                    // Something is Missing....
                </div>
                <div class="box-infomation">
                    <img class="info-avatar" src="https://www.shutterstock.com/image-vector/user-icon-vector-260nw-393536320.jpg">
                    <div class="info-name">Admin</div>
                </div>
            </div>
        </div>
        <div class="Box-elements">
            <div class="box-element-flex">
                <div class="box-travel">
                    <div class="title-element"><h1><?php echo $body; ?></h1></div>