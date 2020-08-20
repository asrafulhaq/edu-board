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
                            <h3 class="m-b-xs text-black">All Results</h3> <small>Welcome back, <?php echo $_SESSION['name']; ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small> </div>
                        <div class="col-sm-6 text-right text-left-xs m-t-md">
                            
                                
                            
                    </section>







                    
                    <div id="add_result" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header"></div> -->
                                <div class="modal-body">
                                    <h2>Add result</h2>
                                    <div class="mess"></div>
                                    <hr>
                                    <div class="student-res-data">
                                        <img style="width: 200px;height: 200px;display: block;margin: auto;" src="" alt="">
                                        <h3 class="text-center"></h3>
                                        <h4 class="text-center"></h4>
                                    </div>
                                    <form id="add_student_result" action="" method="POST" >
                                        <div class="form-group">
                                            
                                            <label id="idstudent" for="">Search Student</label>
                                            <input id="search_student" class="form-control" name="student_id" type="text">
                                            <div class="stu_res"></div>

                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Bangla</label>
                                            <input class="form-control" name="ban" type="text">
                                        </div>

                                         <div class="form-group">
                                            <label for="">English</label>
                                            <input class="form-control" name="eng" type="text">
                                        </div>

                                         <div class="form-group">
                                            <label for="">Math</label>
                                            <input class="form-control" name="math" type="text">
                                        </div>

                                         <div class="form-group">
                                            <label for="">Social Scuence</label>
                                            <input class="form-control" name="ss" type="text">
                                        </div>

                                         <div class="form-group">
                                            <label for="">Science</label>
                                            <input class="form-control" name="s" type="text">
                                        </div>

                                         <div class="form-group">
                                            <label for="">Religion</label>
                                            <input class="form-control" name="rel" type="text">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for=""></label>
                                            <input class="btn btn-primary" name="add" type="submit" value="Add Result">
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer"></div> -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <a id="add_result_btn" class="btn btn-sm btn-primary" href="#">Add student result</a> 

                            <br>
                            <br>
                            <div class="mess"></div>
                            <section class="panel panel-default">
                                <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> All result</header>
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
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Asraful Haque</td>
                                            <td>haq@gmail.com</td>
                                            <td>01717700811</td>
                                            <td>admin</td>
                                            <td><img style="width: 50px;height:50px;" src="images/a4.png" alt=""></td>
                                            <td>active</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="#">View</a>
                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Asraful Haque</td>
                                            <td>haq@gmail.com</td>
                                            <td>01717700811</td>
                                            <td>admin</td>
                                            <td><img style="width: 50px;height:50px;" src="images/a4.png" alt=""></td>
                                            <td>active</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="#">View</a>
                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td>Asraful Haque</td>
                                            <td>haq@gmail.com</td>
                                            <td>01717700811</td>
                                            <td>admin</td>
                                            <td><img style="width: 50px;height:50px;" src="images/a4.png" alt=""></td>
                                            <td>active</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="#">View</a>
                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Asraful Haque</td>
                                            <td>haq@gmail.com</td>
                                            <td>01717700811</td>
                                            <td>admin</td>
                                            <td><img style="width: 50px;height:50px;" src="images/a4.png" alt=""></td>
                                            <td>active</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="#">View</a>
                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Asraful Haque</td>
                                            <td>haq@gmail.com</td>
                                            <td>01717700811</td>
                                            <td>admin</td>
                                            <td><img style="width: 50px;height:50px;" src="images/a4.png" alt=""></td>
                                            <td>active</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="#">View</a>
                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Asraful Haque</td>
                                            <td>haq@gmail.com</td>
                                            <td>01717700811</td>
                                            <td>admin</td>
                                            <td><img style="width: 50px;height:50px;" src="images/a4.png" alt=""></td>
                                            <td>active</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="#">View</a>
                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                            </td>
                                        </tr>
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


