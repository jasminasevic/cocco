<script type="text/javascript">
$(document).ready(function(){
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>


<!-- ADD NEW USER -->
<div class="container toggle" id="editcontent2" style="display:none">
        <br/>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Add new post</b></h2></div>
                </div>
            </div>

        <form action="<?php echo $_SERVER['PHP_SELF']."?page=admin-user" ; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="tbUserFirstName" name="tbUserFirstName">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="tbUserLastName" name="tbUserLastName">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="tbUserEmail" name="tbUserEmail">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="tbUserPass" name="tbUserPass">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="biography">Biography</label>
                        <input type="text" class="form-control" id="tbUserBiography" name="tbUserBiography"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="role">Position</label>
                        <input type="text" id="tbUserPosition" class="form-control" name="tbUserPosition">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="active">Active</label></br>
                        <select name="ddlActive">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="active">Vote</label></br>
                        <select name="ddlVote">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="role">Role</label><br/>
                        <select name="ddlUserRole">
                            <option value="0"> Select role </option>
                                <?php
                                    $roles = executeQuery("SELECT * FROM roles");

                                    foreach($roles as $role) : ?>
                                    
                                    <option value="<?= $role->id_role; ?>"><?= $role->role_title; ?> </option>
                                    
                                <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="fUserImage" name="fUserImage">
                    </div>
                </div>
                

                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary" name="btnSaveUser" id="btnSaveUser">Add new user</button>

                </div>
            </div>
            <!-- /.row -->
        </form>

    </div>
</div>
        <!-- END ADDING NEW USER -->


            <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><br/>
                                <h2>User details</h2>
                            </div>
                            <div class="col-sm-12">
                                <a href="#editcontent2"><button class="btn btn-primary clasadruga" name="btnAddUser">Add new user</button></a>                   
                            </div>
                        </div>
                    </div>
                    <br/>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Biography</th>
                                <th>Position</th>
                                <th>Active</th>
                                <th>Image</th>
                                <th>Role</th>
                                <th>Vote</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $users = executeQuery('SELECT * FROM users
                            INNER JOIN roles ON role_id=id_role
                            INNER JOIN images ON image_id=id_image');
                                foreach($users as $user):
                            ?>

                            <tr>
                                <td><?= $user->first_name; ?></td>
                                <td><?= $user->last_name; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><div style="max-width: 120px; overflow-x: scroll;"><?= $user->pass; ?></div></td>
                                <td><div style="max-height: 300px; overflow-y: scroll;"> <?= $user->biography; ?></div></td>
                                <td><?= $user->title; ?></td>
                                <td><?= $user->active; ?></td>
                                <td><img src='<?= $user->image_path; ?>' alt='<?= $user->alt; ?>'/></td>
                                <td><?= $user->role_title; ?></td>
                                <td><?= $user->user_vote; ?></td>
                                <td>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                                <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>     
                                