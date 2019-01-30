    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Cocco Editor</h1>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li>Editor</li>
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

            <?php 
                if(isset($_GET['id_user'])) :
                $id = $_GET['id_user'];

                $query_prepare =$conn->prepare("SELECT * FROM users WHERE id_user = :id"); //Pripremanje upita za izvrsavanje
                $query_prepare->execute(array(":id"=>$id)); // Izvrsavanje upita sa konkretnim parametrom
                $single_user = $query_prepare->fetch(); // Dohvatanje samo jednog reda kao rezultat

                if(isset($single_user)): 
            ?>            


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="about-section ">
                        <div class="about-title">
                            <h1><?= $single_user->first_name . " " . $single_user->last_name ?></h1>
                            <div class="meta"><?= $single_user->title?></div>
                        </div>
                        <p><?= $single_user->biography?></p>
                    </div>
                    <div class="author-content">                       
                        <a href="index.php?page=blog_listing&id_user=<?= $single_user->id_user ?>" class="btn btn-primary">View All Posts by <?= $single_user->first_name?></a> 
                    </div>
                </div>
                <div class="col-lg-7 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                    <img src="<?= $single_user->image?>" alt="" class="img-responsive">
                </div>

                <?php endif; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    