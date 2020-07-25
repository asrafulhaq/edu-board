<?php include_once "templates/header.php"; ?>
<?php  
    
    use Edu\Board\Controller\User;


    $usr = new User;


?>


<!-- MAIN CONTENT  -->
<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">



                    <section class="row m-b-md">
                        <div class="col-sm-6">
                            <h3 class="m-b-xs text-black">All users</h3> <small>Welcome back, <?php echo $_SESSION['name']; ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small> </div>
                        <div class="col-sm-6 text-right text-left-xs m-t-md">
                            
                                
                            
                    </section>







                    
                    <div id="add_user_modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header"></div> -->
                                <div class="modal-body">
                                    <h2>Add new User</h2>
                                    <div class="mess"></div>
                                    <hr>
                                    <form id="add_user_form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" name="name" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input class="form-control" name="uname" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" name="email" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Cell</label>
                                            <input class="form-control" name="cell" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select class="form-control" name="role" id="">
                                                <option value="">- select -</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for=""></label>
                                            <input class="btn btn-primary" name="add" type="submit" value="Add User">
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer"></div> -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="mess"></div>

                            <a id="add_user_btn" class="btn btn-sm btn-primary" href="#">Add new user</a> 

                            <br>
                            <br>

                            <section class="panel panel-default">
                                <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> All users</header>
                                <table class="table table-striped m-b-none">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Cell</th>
                                            <th>Role</th>
                                            <th>Photo</th>
                                            <th>Status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="all_users_tbody">
                                        

                                        
                                    </tbody>
                                </table>
                            </section>
                        </div>

                    </div>












                </section>
            </section>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<?php include_once "templates/footer.php"; ?>


