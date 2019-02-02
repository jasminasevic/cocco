

<body>
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <a href="index.php">
                        <img src="./images/cocco-logo.jpg" alt="cocco logo">
                    </a>
                </div>

   

                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">

                        <?php echo build_menu($novi); ?>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 hidden-md hidden-sm hidden-xs">
                    <?php
                        if(isset($_SESSION['user'])):
                    ?>
                        <div class="header-btn">
                            <a href="php/logout.php"  class="btn btn-default">Logout</a>
                        </div>
                    <?php else: ?>
                        <div class="header-btn">
                            <a href="index.php?page=login" class="btn btn-default">Login</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section close -->