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

                <?php 

                // page is the current page, if there's nothing set, default is page 1
                $curpage = isset($_GET['curpage']) ? $_GET['curpage'] : 1;

                $id_category = "";
                if(isset($_GET['id_category'])){
                    $id_category = "&id_category=" . $_GET['id_category'];
                }

                // set records or rows of data per page
                $recordsPerPage = 3;
                // calculate for the query LIMIT clause
                $fromRecordNum = ($recordsPerPage * $curpage) - $recordsPerPage;
                // select all data
                
                $articles = executeQuery("SELECT * FROM posts 
                INNER JOIN categories ON category_id = id_category
                INNER JOIN images ON image_id = id_image  
                INNER JOIN users ON user_id=id_user ". 
                ($_GET['id_category'] ? " WHERE id_category=". $_GET['id_category'] : "")
                . 
                ($_GET['id_user'] ? " WHERE id_user=". $_GET['id_user'] : "")
                . " ORDER BY publishing_date DESC LIMIT 
                {$fromRecordNum}, {$recordsPerPage}"); 

                //get number of rows returned
                $num = executeQuery("SELECT count(*) FROM posts"); 
               

                   foreach($articles as $article):
                ?>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="post-block">
                        <div class="post-img">
                            <a href="index.php?page=single_blog&id=<?= $article->id_post; ?>" class="imghover">
                                <img src="<?= $article->small_image_path ?>"  alt="<?= $article->alt?>" class="img-responsive">
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
                            <?php
                            if($curpage>1):
                            // ********** show the first page
                            echo "<li>";
                                echo "<a href='{$_SERVER['PHP_SELF']}?page=blog_listing{$id_category}&curpage=1' title='Go to the first page.' class='customBtn'>";
                                echo "<span style='margin:0 .5em;'> << </span>";
                            echo "</a>";
                            echo "</li>";

                            // ********** show the previous page
                            $prev_page = $curpage - 1;
                            echo "<li>";
                            echo "<a href='{$_SERVER['PHP_SELF']}?page=blog_listing{$id_category}&curpage={$prev_page}' title='Previous page is {$prev_page}.' class='customBtn'>";
                                echo "<span style='margin:0 .5em;'> < </span>";
                            echo "</a>";
                            echo "</li>";
                                endif; 

                            // ********** show the number paging
            
                            // find out total pages
                            
                            $row = executeQuery("SELECT COUNT(*) as total_rows FROM posts");
                            $total_rows = $row[0]->total_rows;
                            
                            if(isset($_GET['id_category'])):
                                $id_categ = $_GET['id_category'];
                            $category_row_query = executeQuery("SELECT COUNT(*) as total_category_rows FROM posts 
                            INNER JOIN categories ON category_id=id_category 
                            WHERE category_id = {$id_categ}");
                            $total_category_rows = $category_row_query[0]->total_category_rows;

                            $total_pages = ceil($total_category_rows / $recordsPerPage);                 
                            else:
                            $total_pages = ceil($total_rows / $recordsPerPage);
                            endif;
                            
                            // range of num links to show
                            $range = 3;
                            
                            // display links to 'range of pages' around 'current page'
                            $initial_num = $curpage - $range;
                            $condition_limit_num = ($page + $range)  + 1;
                            
                            for ($x=$initial_num; $x<$condition_limit_num; $x++) {
                                
                                // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
                                if (($x > 0) && ($x <= $total_pages)) {
                                
                                    // current page
                                    if ($x == $curpage) {
                                        echo "<li>";
                                            echo "<a href='#' class='customBtn' style='background:red;'>$x</a>";
                                        echo "</li>";
                                    } 
                                    
                                    // not current page
                                    else {
                                        echo "<li>";
                                        echo " <a href='{$_SERVER['PHP_SELF']}?page=blog_listing{$id_category}&curpage=$x' class='customBtn'>$x</a> ";
                                        echo "</li>";
                                    }
                                }
                            }
                            // ***** for 'next' and 'last' pages
                            if($curpage<$total_pages){
                                // ********** show the next page
                                $next_page = $curpage + 1;
                                echo "<li>";
                                    echo "<a href='{$_SERVER['PHP_SELF']}?page=blog_listing{$id_category}&curpage={$next_page}' title='Next page is {$next_page}.' class='customBtn'>";
                                        echo "<span style='margin:0 .5em;'> > </span>";
                                    echo "</a>";
                                echo "</li>";
                                // ********** show the last page
                                echo "<li>";
                                    echo "<a href='{$_SERVER['PHP_SELF']}?page=blog_listing{$id_category}&curpage={$total_pages}' title='Last page is {$total_pages}.' class='customBtn'>";
                                        echo "<span style='margin:0 .5em;'> >> </span>";
                                    echo "</a>";
                                echo "</li>";
                            }
                            ?>
                         </ul>
                    </div>
                </div>


                <!-- pagination close -->
            </div>
        </div>
    </div>

    <!-- news-close -->