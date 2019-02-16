
<!-- ADD NEW QUOTE -->
<div class="container toggle" style="display:visible">
        <br/>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Add new quote</b></h2></div>
                </div>
            </div>

        <form action="<?php echo $_SERVER['PHP_SELF']."?page=admin-quote" ; ?>" method="POST">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="firstname">Quote Text</label>
                        <input type="text" class="form-control" id="tbQuoteText" name="tbQuoteText">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lastname">Quote Author</label>
                        <input type="text" class="form-control" id="tbQuoteAuthor" name="tbQuoteAuthor">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="role">Category</label><br/>
                            <select name="ddlQuoteCategory" id="ddlQuoteCategory">
                                <option value="0"> Select category </option>
                                    <?php
                                        $categories = executeQuery("SELECT * FROM categories");

                                        foreach($categories as $category) : ?>
                                        
                                        <option value="<?= $category->id_category; ?>"><?= $category->category_title?> </option>
                                        
                                    <?php endforeach; ?>
                            </select>   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">

                </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit"  name="btnSaveQuote" id="btnSaveQuote">Add new quote</button>
                </div>
            </div>
            <!-- /.row -->
        </form>

    </div>
</div>
        <!-- END ADDING NEW QUOTE -->

              <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><br/>
                                <h2>Quote details</h2>
                            </div>
                            <!-- <div class="col-sm-12">
                                <a href="#"><button class="btn btn-primary clasadruga" name="btnAddQuote">Add new quote</button></a>                   
                            </div> -->
                        </div>
                    </div>
                    <br/>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Quote Text</th>
                                <th>Quote Author</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $quotes = executeQuery('SELECT * FROM quotes
                            INNER JOIN categories ON category_id=id_category');
                                foreach($quotes as $quote):
                            ?>

                            <tr>
                                <td><?= $quote->quote_text; ?></td>
                                <td><?= $quote->author; ?></td>
                                <td><?= $quote->category_title; ?></td>
                                <td>
                                    <!-- <a class="edit" title="Edit" data-toggle="tooltip">
                                        <i class="material-icons">&#xE254;</i>
                                    </a> -->
                                    <a href="#" class="delete delete-quote" data-id='<?= $quote->id_quote; ?>' title="Delete" data-toggle="tooltip">
                                        <i class="material-icons">&#xE872;</i>
                                    </a>
                                </td>
                            </tr>
                                <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>     
                                