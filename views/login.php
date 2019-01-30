      <!-- page-header-start -->
      <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Login / Sign Up</h1>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Login or Sign Up</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                    <div class="page-section">
                        <p>Discover the Latest Fashion, Health &amp; Travel News on Cocco Magazine</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
   <!-- testimonials-start -->
   <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                <?php
                    if (isset($_SESSION['user'])):
                    echo "<h3>You are now logged in.</h3>";
                ?>

                    <?php else: ?>
                <div class="mb30">
                <div class="contact-form">
                    <h1>New account</h1>
                    <p class="mb40">
                        <small>
                        With registration with us, new world of fashion, style, beauty, health, travel
                        and much more opens to you!  
                        </small> 
                    </p>
                    <div class="row">
                        <form>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <div class="form-group">
                                    <label class="control-label sr-only " for="firstName"></label>
                                    <input id="firstName" type="text" placeholder="First Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <div class="form-group">
                                    <label class="control-label sr-only " for="lastName"></label>
                                    <input id="lastName" type="text" placeholder="Last Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <div class="form-group">
                                    <label class="control-label sr-only " for="email"></label>
                                    <input id="email" type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <div class="form-group">
                                    <label class="control-label sr-only " for="password"></label>
                                    <input id="password" type="text" placeholder="Password" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="mb30">
                        <div class="contact-form">
                            <h1>Login</h1>
                            <p class="mb40">
                                <small>Please enter your email and password to login to your Cocco Magazine account.<br/></small>
                            </p>
                            <div class="row">
                                <form action="./php/login.php" method="POST">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="form-group">
                                            <label class="control-label sr-only " for="email"></label>
                                            <input id="logEmail" name="logEmail" type="text" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="form-group">
                                            <label class="control-label sr-only " for="firstName"></label>
                                            <input id="logPassword" name="logPassword" type="text" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (isset($_SESSION['errors'])):
                            echo "<div class='text-center'>
	                                <strong>The email address or password you entered is not valid. Please try again.</strong>
	                              </div>";
                            unset($_SESSION['errors']);
                        ?>
	                            <?php endif;?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
                        <?php endif; ?>
                        

    </div>
</div>