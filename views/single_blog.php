 <!-- page-header-start -->
 <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Cocco Article</h1>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php?page=main">Home</a></li>
                                <li>Article</li>
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

    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                        <?php 
                            if(isset($_GET['id'])) :
                            $id = $_GET['id'];

                            $query_prepare =$conn->prepare("SELECT p.post_title, p.post_text, p.publishing_date, 
                            c.category_title, c.id_category, 
                            u.id_user, u.first_name, u.last_name, u.biography, u.title, u.registration_date, 
                            i.small_image_path AS user_small, i.alt AS user_alt,
                            im.image_path AS post_large, im.small_image_path AS post_small, im.alt AS post_alt
                            FROM posts p INNER JOIN categories c ON p.category_id=c.id_category 
                            INNER JOIN users u ON p.user_id=u.id_user 
                            INNER JOIN images i ON u.image_id = i.id_image 
                            INNER JOIN images im ON im.id_image=p.image_id 
                            WHERE id_post = :id"); //Pripremanje upita za izvrsavanje
                            $query_prepare->execute(array(":id"=>$id)); // Izvrsavanje upita sa konkretnim parametrom
                            $single_post = $query_prepare->fetch(); // Dohvatanje samo jednog reda kao rezultat

                            if(isset($single_post)): 
                        ?>

                            <div class="post-block">
                                <!-- post holder -->
                                <div class="post-img">
                                    <!-- post img -->
                                    <img src="<?= $single_post->post_large?>" alt="<?= $single_post->post_alt?>" class="img-responsive">
                                </div>
                                <!-- /.post img -->
                                <div class="post-content">
                                    <!-- post content -->
                                    <div class="post-header">
                                        <!-- post header -->
                                        <h2 class="post-title"><?= $single_post->post_title?></h2>
                                        <div class="meta">
                                            <span class="meta-categories">
                                                <a href="index.php?page=blog_listing&id_category=<?= $single_post->id_category; ?>"><?= $single_post->category_title?></a>
                                            </span>
                                            <span class="meta-date">
                                            <?php $publishing_date_time=explode(" ", $single_post->publishing_date);
                                                $publishing_date = explode("-", $publishing_date_time[0]);
                                                $publishing_time = explode(":", $publishing_date_time[1]);
                                                $timestamp = mktime($publishing_time[0], $publishing_time[1], $publishing_time[2], $publishing_date[1], $publishing_date[2], $publishing_date[0]);
                                                echo date("d F, Y", $timestamp);
                                            ?>

                                            </span>
                                        </div>
                                    </div>
                                    <!-- /.post header -->
                                    <p> <?= $single_post->post_text?></p>
                                    <div class="related-post-block">
                                        <!-- related post block -->


                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-sm-12">
                                                <h3 class="related-post-title">Related Posts</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <?php 
                                                   $category=$single_post->id_category;
                                                   $related_posts = executeQuery("SELECT * FROM posts 
                                                   INNER JOIN images ON image_id = id_image 
                                                   INNER JOIN categories  ON category_id=id_category 
                                                   WHERE id_post != $id AND id_category = $category 
                                                   ORDER BY publishing_date LIMIT 2");
                                                   foreach($related_posts as $related_post):
                                                ?>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="related-post">
                                                    <!-- related post -->
                                                    <div class="related-img">
                                                        <a href="index.php?page=single_blog&id=<?=$related_post->id_post ?>" class="imghover">
                                                            <img src="<?= $related_post->small_image_path?>" alt="<?= $related_post->post_alt?>" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="related-post-content">
                                                        <h4 class="related-title">
                                                            <a href="index.php?page=single_blog&id=<?=$related_post->id_post ?>" class="title"><?= $related_post->post_title?> </a>
                                                        </h4>
                                                        <div class="meta">
                                                            <span class="meta-categories">in 
                                                                <a href="index.php?page=blog_listing&id_category=<?= $related_post->id_category; ?>" class=""><?= $related_post->category_title?></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.related post -->
                                            </div>
                                                   <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <!-- /.related post block -->
                                </div>
                                <!-- /.post content -->
                            </div>
                            <!-- /.post holder -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class=" widget">
                                <!-- Post author -->
                                <h2 class="widget-title">About author</h2>
                                <div class=" author-block">
                                    <div class="author-img">
                                    <a href="index.php?page=about_author&id_user=<?= $single_post->id_user?>" class="imghover">
                                        <img src="<?= $single_post->user_small?>" style="width:180px; height:180px; "class="img-circle" alt="<?= $single_post->user_alt ?>">
                                    </a>
                                    </div>
                                    <div class="author-post-content ">
                                        <div class="author-header">
                                            <h3>
                                                <a href="index.php?page=about_author&id_user=<?= $single_post->id_user?>" class="title"><?= $single_post->first_name .' '. $single_post->last_name?> </a>
                                            </h3>
                                        </div>
                                        <div class="author-meta "><?= $single_post->title ?></div>
                                        <div class="author-content">
                                            <p><?= $single_post->biography?></p>
                                            <a href="index.php?page=blog_listing&id_user=<?= $single_post->id_user ?>" class="btn btn-primary">View All Post</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.post author -->
                            <?php endif;?>
                        <?php endif;?>


                     <!-- widget-search-start -->
                     <div class=" widget widget-search">
                        <form>
                            <div class="search-form">
                                <input type="text" class="form-control " placeholder="Search Here">
                                <button type="Submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- widget-search-close -->
                    <!-- widget-categories-start -->
                    <div class=" widget widget-categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul class="angle angle-right">
                            <?php $categories=executeQuery("SELECT * FROM categories"); 
                                foreach($categories as $category):
                            ?>
                                <li>
                                    <a href="index.php?page=blog_listing&id_category=<?= $category->id_category; ?>"><?= $category->category_title?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <!-- widget-categories-close -->
                    <!-- widget-recent-post-start -->
                    <div class=" widget widget-recent-post">
                        <h2 class="widget-title mb20">Recent Posts</h2>
                        <ul>
                            <?php $articles = executeQuery("SELECT * FROM posts INNER JOIN categories ON category_id=id_category 
                                 ORDER BY publishing_date DESC LIMIT 3");
                                    foreach($articles as $article):
                            ?>
                            <li>
                                <div class="recent-post">
                                    <div class="meta">
                                        <span class="meta-date"> 
                                            <?php $publishing_date_time=explode(" ", $article->publishing_date);
                                                $publishing_date = explode("-", $publishing_date_time[0]);
                                                $publishing_time = explode(":", $publishing_date_time[1]);
                                                $timestamp = mktime($publishing_time[0], $publishing_time[1], $publishing_time[2], $publishing_date[1], $publishing_date[2], $publishing_date[0]);
                                                echo date("d F, Y", $timestamp);
                                            ?>
                                        </span></div>
                                    <h5 class="recent-title "><a href="index.php?page=single_blog&id=<?= $article->id_post; ?>" class="title"><?= $article->post_title?></a></h5>
                                </div>
                            </li>
                                    <?php endforeach;?>
                        </ul>
                            
                    </div>
                    <!-- widget-recent-post-close-->
                </div>
            </div>
        </div>
    </div>