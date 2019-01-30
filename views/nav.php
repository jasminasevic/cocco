

<body>
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <a href="index.php">
                        <img src="./images/cocco-logo.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active">
                                    <a href="index.php" title="Home">Home</a>
                                </li>
                                <li class="has-sub">
                                    <a href="index.php?page=blog_listing" title="Magazine">Magazine</a>
                                    <ul>
                                        <li>
                                            <a href="index.php?page=blog_listing" title="Fashion">Fashion</a>
                                        </li>
                                        <li>
                                            <a href="index.php?page=blog_listing" title="Health and Beauty">Health and Beauty</a>
                                        </li>
                                        <li>
                                            <a href="index.php?page=blog_listing" title="Travel">Travel</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.php?page=about_us" title="About us">About</a>
                                </li>
                                <li>
                                    <a href="index.php?page=contact" title="Contact Us">Contact</a>
                                </li>
                            </ul>
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