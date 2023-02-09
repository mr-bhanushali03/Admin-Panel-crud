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
            <div class="wrap">
                <div class="box">
                    <div class="content">
                        <form>
                            <div class="logo-wrap">
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <h1>Welcome Back!</h1>
                            <div class="input-box">
                                <input type="text" required autocomplete="off">
                                <i class="fa-solid fa-user"></i>
                                <span>Username</span>
                            </div>
                            <div class="input-box">
                                <input type="password" required autocomplete="off">
                                <i class="fa-solid fa-lock"></i>
                                <span>Password</span>
                            </div>
                            <div class="links">
                                <a href="#">Forgot Password?</a>
                                <a href="signup.php">Sign Up</a>
                            </div>
                            <div class="input-box">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .fa-key{
            font-size: 60px;
        }
        .wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto auto;
        }

        .wrap .box {
            position: relative;
            width: 600px;
            height: 880px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to top, #212225, #313337);
            border-radius: 18px;
            box-shadow: 0 9px 0 #111113, 0px 2.9px 3.3px rgba(0, 0, 0, 0.068),
                0px 9.1px 9px rgba(0, 0, 0, 0.084), 0px 23px 21.7px rgba(0, 0, 0, 0.099),
                0px 72px 72px rgba(0, 0, 0, 0.16);
            border-bottom: 1px solid rgba(255, 255, 255, 0.18);
        }

        .content {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content form {
            position: relative;
            width: calc(100% - 4em);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #fff;
        }

        .content form .logo-wrap {
            width: 100px;
            height: 100px;
            background: #fff;
            color: #313337;
            font-size: 2em;
            border-radius: 50%;
            display: grid;
            place-content: center;
            padding-top: -300px;
        }

        .content form h1 {
            line-height: 1;
            font-size: 1.75em;
            padding-top: 0.6em;
        }

        .content form .input-box {
            position: relative;
            width: 100%;
            /* margin: 0.8em; */
            padding-top: 50px;
        }

        .content form .input-box:last-child {
            margin-bottom: 0;
        }

        .content form .input-box input {
            position: relative;
            width: 100%;
            padding: 0.625em 0 0.625em 1.5em;
            background: transparent;
            font-size: 1em;
            box-shadow: none;
            border: none;
            outline: none;
            border-bottom: 2px solid #fff;
            color: #ffff;
        }

        .content form .input-box i {
            position: absolute;
            left: 0;
            bottom: 14px;
            font-size: 1em;
        }

        .content form .input-box span {
            position: absolute;
            left: 0;
            padding: 0.625em 0 0.625em 1.5em;
            pointer-events: none;
            opacity: 0.5;
            transition: 300ms;
        }

        .content form .input-box input:focus~span,
        .content form .input-box input:valid~span {
            transform: translateY(-20px);
            font-size: 0.9em;
            background: #fff;
            color: #212225;
            opacity: 1;
            padding: 2px 4px;
        }

        .content form .links {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding-top: 200px;
        }

        .content form .links a {
            color: #fff;
            text-decoration: none;
        }

        .content form .links a:hover {
            text-decoration: underline;
        }

        .content form .input-box input[type="submit"] {
            background: #fff;
            color: #111113;
            border: 2px solid #fff;
            font-weight: 600;
            padding: 0.625em;
            cursor: pointer;
        }

        .content form .input-box input[type="submit"]:hover {
            background: transparent;
            color: #fff;
        }
    </style>
</body>

</html>