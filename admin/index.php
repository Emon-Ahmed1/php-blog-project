<?php
include('Class/function.php');
$obj = new blogproject;

if (isset($_POST['admin_login'])) {
    $obj->admin_login($_POST);
}
         session_start();
if (isset($_SESSION['adminId'])) {
    header('location:dashboard.php');
}

?>

<?php include_once('include/header.php') ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input name="admin_email" class="form-control py-4" id="inputEmailAddress"
                                                type="email" placeholder="Enter email address" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input name="admin_pass" class="form-control py-4" id="inputPassword"
                                                type="password" placeholder="Enter password" />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck"
                                                    type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember
                                                    password</label>
                                            </div>
                                        </div>
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" value="Login" name="admin_login"
                                                class="btn btn-primary">
                                        </div>
                                        
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>

    </div>
    <?php include_once('include/script.php') ?>
</body>

</html>