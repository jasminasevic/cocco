<?php
    if($_SESSION['user']->role_title=="admin"):
 ?>
    <!-- ADD NEW POST -->
    <div class="container toggle" style="display:visible">
        <br/>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Add new post</b></h2></div>
                </div>
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']."?page=admin-post" ?>" method="POST" enctype="multipart/form-data">
            <div class="col-sm-12 ">
                <?php echo $result; ?>    
            </div>    
            <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="postTitle">Post Title</label>
                            <input type="text" class="form-control" id="tbPostTitle" name="tbPostTitle">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="postSUmmary">Summary</label>
                            <input type="text" class="form-control" id="tbPostSummary" name="tbPostSummary">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="postText">Text</label>
                            <textarea id="tbPostText" class="form-control" name="tbPostText"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="role">Category</label><br/>
                            <select name="ddlPostCategory">
                                <option value="0"> Select category </option>
                                    <?php
                                        $categories = executeQuery("SELECT * FROM categories");

                                        foreach($categories as $category) : ?>
                                        
                                        <option value="<?= $category->id_category; ?>"><?= $category->category_title?> </option>
                                        
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="image">Large image (360 x 340 px)</label>
                            <input type="file" class="form-control" id="fPostImage" name="fPostImage">
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button type="submit" id="btnSavePost" name="btnSavePost">Publish Post</button>

                    </div>
                </div>
                <!-- /.row -->
            </form>

        </div>
    </div>
    <!-- END ADDING NEW POST-->


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><br/>
                        <h2>Post Details</h2>
                    </div>
                    <!-- <div class="col-sm-12">
                        <a href="#editcontent1"><button class="btn btn-primary clasadruga" name="btnAddPost" >Add new post</button></a>                   
                    </div> -->
                </div>
            </div>
            <br/>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Text</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Small Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $posts = executeQuery('SELECT * FROM posts
                    INNER JOIN categories ON category_id=id_category
                    INNER JOIN images ON image_id=id_image 
                    ORDER BY publishing_date DESC');
                        foreach($posts as $post):
                    ?>

                    <tr>
                        <td><?= $post->post_title; ?></td>
                        <td><?= $post->summary; ?></td>
                        <td><div style="max-height: 300px; overflow-y: scroll;"> <?= $post->post_text; ?></div></td>
                        <td><?= $post->category_title; ?></td>
                        <td><img src='<?= $post->image_path; ?>' alt='<?= $post->alt; ?>'/></td>
                        <td><img src='<?= $post->image_path; ?>' alt='<?= $post->alt; ?>'/></td>
                        <td>
                            <!-- <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> -->
                            <a href="#" class="delete delete-post" data-id='<?= $post->id_post; ?>' title="Delete" data-toggle="tooltip">
                                <i class="material-icons">&#xE872;</i>
                            </a>
                        </td>
                    </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>     
    <?php else: ?>
    <div class="container" style="min-height:300px;">
        <br/>
        <div class="table-wrapper">
             <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-danger"> 
                        You don't have access to this page
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>                    