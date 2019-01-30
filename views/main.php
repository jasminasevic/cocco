
    <!-- slider-start -->
    <div class="slider">
        <div class="owl-carousel slider">
        
        <?php $slider_details = executeQuery("SELECT * FROM main_slider INNER JOIN categories ON category_id=id_category"); 
            foreach($slider_details as $slider):
        ?>

            <div class="item">
                <div class="slider-img">
                    <img src="<?= $slider->slider_image; ?>" alt="<?= $slider->title ?>">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12  col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12  col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title"><?= $slider->title ?></h1>
                                
                                <a href="index.php?page=blog_listing" class="btn btn-default btn-lg hidden-sm hidden-xs">Read all articles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <!-- slider-close -->

    <!-- news-start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>Latest News</h1>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                
                <?php $articles = executeQuery("SELECT * FROM posts INNER JOIN categories ON category_id=id_category 
                INNER JOIN users ON user_id=id_user ORDER BY publishing_date DESC LIMIT 6");
                    foreach($articles as $article):
                ?>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="post-block">
                        <div class="post-img">
                            <a href="index.php?page=single_blog&id=<?= $article->id_post; ?>" class="imghover">
                                <img src="<?= $article->featured_image_small?>" alt="<?= $article->post_title?>" class="img-responsive">
                            </a>
                        </div>
                        <!-- post block -->
                        <div class="post-content">
                            <div class="meta">
                                <span class="meta-categories">
                                    <a href="index.php?page=blog_listing&id_category=<?= $article->id_category; ?>"><?= $article->category_title?></a>
                                </span>
                                <span class="meta-date">
                                    <?php $publishing_date_time=explode(" ", $article->publishing_date);
                                        $publishing_date = explode("-", $publishing_date_time[0]);
                                        $publishing_time = explode(":", $publishing_date_time[1]);
                                        $timestamp = mktime($publishing_time[0], $publishing_time[1], $publishing_time[2], $publishing_date[1], $publishing_date[2], $publishing_date[0]);
                                        echo date("d M, Y", $timestamp);
                                    ?>
                                </span>
                            </div>
                            <h4>
                                <a href="#" class="title"><?= $article->post_title?></a>
                            </h4>
                            <p><?= $article->summary?></p>
                            <a href="index.php?page=single_blog&id=<?= $article->id_post; ?>" class="btn-link">read more</a>
                        </div>
                    </div>
                </div>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- news-close -->
    <!-- testimonials-start -->
    <div class="space-medium bg-light">
        <div class="container">
            <div class="testimonial-carousel">
                <div class="owl-carousel slider">

                    <?php $quotes = executeQuery("SELECT * FROM quotes INNER JOIN categories ON category_id=id_category");
                        foreach($quotes as $quote):
                    ?>

                    <div class="item">
                        <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="">
                                <div class="testimonial-content">
                                    <div class="testimonial-icon">
                                        <img src="./images/quote.png" alt="">
                                    </div>
                                    <span><small><?= $quote->category_title?></small></span>
                                    <h2>Quotes of the day</h2>
                                    <p class="testimonial-text"><?= $quote->quote_text?></p>
                                    <div class="testimonial-meta">
                                        <span>- <?= $quote->author?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials-close  -->