<!DOCTYPE html>
<html lang="en">

<head>
    <title>--Sign In</title>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="#">
    <meta name="author" content="Somade Daniel">

    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
</head>

<body class="fix-menu">

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material" method="post" action="actions/process_login.php">
                        <div class="text-center">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <h5 style="color: red; margin-top: -20px; margin-bottom: 10px;"><i><?php if(isset($_GET['err']))echo$_GET['err'];?></i></h5>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" required=""
                                        placeholder="Username">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required=""
                                        placeholder="Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                            <input type="submit" value="submit" class="btn btn-primary">
                                    </div>
                                </div>
                                
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0"><b>Developed By: Somade Daniel Oluwaseunfunmi.</b></p>
                                        <p class="text-inverse text-left m-b-0"><b>Matric NO: 18010211020</b></p>
                                        <p class="text-inverse text-left m-b-0"><b>Supervisor: Mr I.B.Sadiku</b></p>
                                        <p class="text-inverse text-left m-b-0"><b>Guide: Engr Awolere Adeleke</b></p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>


    <?php include'footer.php'; ?>