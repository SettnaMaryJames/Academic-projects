<?php
session_start();

    include 'database/connect.php';

 if(isset($_POST['sub']))
 {

    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="admin" and $password=="admin")
    {
        echo '<script>alert("Successful Login");window.location.href="admin/adminhome.php"</script>';
    }
    else
    {
        $sel="SELECT * FROM login_tb WHERE username='$username' and password='$password'";
        $query=mysqli_query($con,$sel);

        $array=mysqli_num_rows($query);
        if ($array==1)
        {
            $fetch=mysqli_fetch_array($query);
            $role=$fetch['role'];


            if ($role=="Student")
            {
                $_SESSION['lid']=$fetch['logid'];
                $_SESSION['username']=$fetch['username'];
                $_SESSION['password']=$fetch['password'];
                echo '<script>alert("Successful Login");window.location.href="student/student_home.php"</script>';
            }
            else if($role=="College")
            {
                $_SESSION['lid']=$fetch['logid'];
                $_SESSION['username']=$fetch['username'];
                $_SESSION['password']=$fetch['password'];
                echo '<script>alert("Successful Login");window.location.href="college/college_home.php"</script>';
            }
            else
            {
                echo '<script>alert("Try Again");window.location.href="login.php"</script>';
            }
        }
        

    }

 }

?>



<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Login</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Prime login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css_login/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <link rel="stylesheet" href="css_login/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <style type="text/css">
        body {
            background-color: #9a28d7;
  /*  background: url(../images/1.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
    font-family: 'Mukta Mahee', sans-serif;*/
}
    </style>
</head>
<!-- //Head -->
<!-- Body -->

<body>
    <h1 class="title-agile text-center">Login Form</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
            <form action="#" method="post">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="text1" type="text" value="" placeholder="username" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="password">
                    </div>
                </div>
                <div class="field-group">
                    <div class="check">
                        <label class="checkbox w3l">
                            <input type="checkbox" onclick="myFunction()">
                            <i> </i>show password</label>
                    </div>
                    <!-- script for show password -->
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <!-- //script for show password -->
                </div>
                <div class="wthree-field">
                    <input id="saveForm" name="sub" type="submit" value="sign in" />
                </div>
                <ul class="list-login">
                    <li class="switch-agileits">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            keep me signed in
                        </label>
                    </li>
                    <li>
                        <a href="index.php" class="text-right">Home</a>
                    </li>
                    <li class="clearfix"></li>
                </ul>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>FEST MANAGEMENT
            <a href=""></a>
        </p>
    </div>
</body>
<!-- //Body -->
</html>