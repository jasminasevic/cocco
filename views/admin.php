<?php
    if($_SESSION['user']->role_title=="admin"):
?>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>MANAGE PAGES</h2><br/></div>
                    <div class="col-sm-12">
                        <a href="index.php?page=admin-quote"><button class="btn btn-primary" name="btnAddQuote" style="width:30%">QUOTES</button></a>
                    </div>
                    <div class="col-sm-12">
                        <a href="index.php?page=admin-user"><button class="btn btn-primary" name="btnAddUser" style="width:30%">USERS</button></a>
                    </div>
                    <div class="col-sm-12">
                        <a href="index.php?page=admin-post"><button class="btn btn-primary" name="btnAddPost" style="width:30%">POSTS</button></a>
                    </div>
                    <!-- <div class="col-sm-12">
                        <a href="#"><button class="btn btn-primary" name="btnAddPost" style="width:30%">CATEGORIES</button></a>
                    </div>
                    <div class="col-sm-12">
                        <a href="#"><button class="btn btn-primary" name="btnAddPost" style="width:30%">ROLES</button></a>
                    </div>
                    <div class="col-sm-12">
                        <a href="#"><button class="btn btn-primary" name="btnAddPost" style="width:30%">MAIN SLIDER</button></a>
                    </div> -->
                </div>
            </div>
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