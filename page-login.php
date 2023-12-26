<?php
include("header.php");
?>
<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            Login
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><span class="delimiter"></span>Login
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="page-login-register">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 sm-m-b-50">
                                    <div class="box-form-login">
                                        <h2>Login</h2>
                                        <div class="box-content">
                                            <div class="form-login">
                                                <form method="post" class="login" action="my-account.php">
                                                    <div class="username">
                                                        <label>Username or email address <span class="required">*</span></label>
                                                        <input type="text" class="input-text" name="username" id="username" required>
                                                    </div>
                                                    <div class="password">
                                                        <label for="password">Password <span class="required">*</span></label>
                                                        <input class="input-text" type="password" name="password" required>
                                                    </div>
                                                    <div class="rememberme-lost">
                                                    </div>
                                                    <div class="button-login">
                                                        <input type="submit" class="button" name="login" value="Login">
                                                    </div>
                                                    <div class="button-register">DON'T HAVE AN ACCOUNT?  
                                                        <a href="page-register.php" class="button-next-reregister"> REGISTER</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="box-form-login">
                                        <h2 class="register">Register</h2>
                                        <div class="box-content">
                                            <div class="form-register">
                                                <form method="post" class="register"  action="my-account.php">
                                                    <div class="email">
                                                        <label>Email address <span class="required">*</span></label>
                                                        <input type="email" class="input-text" name="email" value="" required>
                                                    </div>
                                                    <div class="password">
                                                        <label>Password <span class="required">*</span></label>
                                                        <input type="password" class="input-text" name="password" required>
                                                    </div>
                                                    <div class="button-register">
                                                        <input type="submit" class="button" name="register" value="Register">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>

<?php
include("footer.php");
?>