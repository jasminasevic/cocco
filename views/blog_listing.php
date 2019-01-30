<!-- page-header-start -->
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Magazine</h1>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php?page=main">Home</a>
                                </li>
                                <li>Magazine</li>
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
    <!-- news-start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">

                <?php $articles = executeQuery("SELECT * FROM posts 
                INNER JOIN categories ON category_id = id_category
                INNER JOIN images ON image_id = id_image  
                INNER JOIN users ON user_id=id_user ". 
                ($_GET['id_category'] ? " WHERE id_category=". $_GET['id_category'] : "")
                . 
                ($_GET['id_user'] ? " WHERE id_user=". $_GET['id_user'] : "")
                . " ORDER BY publishing_date DESC"); 
                   foreach($articles as $article):
                ?>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="post-block">
                        <div class="post-img">
                            <a href="index.php?page=single_blog&id=<?= $article->id_post; ?>" class="imghover">
                                <img src="<?= $article->small_image_path ?>" alt="<?= $article->alt?>" class="img-responsive">
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
                                <a href="index.php?page=single_blog&id=<?= $article->id_post; ?>" class="title"><?= $article->post_title?></a>
                            </h4>
                            <p><?= $article->summary?></p>
                            <a href="index.php?page=single_blog&id=<?= $article->id_post; ?>" class="btn-link">read more</a>
                        </div>
                    </div>
                </div>
                   <?php endforeach; ?>

                <!-- pagination start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="st-pagination">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="previous">
                                    <span aria-hidden="true">Previous</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- pagination close -->
            </div>
        </div>
    </div>

    <!-- news-close -->