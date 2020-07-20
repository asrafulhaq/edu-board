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
                            <h3 class="m-b-xs text-black">Settings</h3> <small>Welcome back, <?php echo $_SESSION['name']; ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small> </div>
                        <div class="col-sm-6 text-right text-left-xs m-t-md">
                            <div class="btn-group"> <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                                <ul class="dropdown-menu text-left pull-right">
                                    <li><a href="#">Notification</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="#">Analysis</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">More settings</a></li>
                                </ul>
                            
                    </section>







                    <!-- Our Page content -->
                    <?php  





                        if ( isset($_POST['pass']) ) {
                            // Get value 
                            $old_pass = $_POST['old_pass'];
                            $new_pass = $_POST['new_pass'];
                            $confirm_pass = $_POST['confirm_pass'];
                            $user_id = $_SESSION['id'];

                           

                            // Check confirm 
                            if ( $new_pass == $confirm_pass ) {
                                $cpass = true;
                            }else {
                                $cpass = false;
                            }

                            // Old Pass check
                            if ( password_verify( $old_pass , $_SESSION['pass']) ) {
                                $old_pass_check = true;
                            }else {
                                $old_pass_check = false;
                            }



                            if ( empty( $old_pass )  || empty( $new_pass ) || empty($confirm_pass) ) {
                               $mess = "<p class=\"alert alert-danger\">All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                            }elseif( $cpass == false ){
                                $mess = "<p class=\"alert alert-danger\">Confirm password not match ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                            }elseif( $old_pass_check == false ){
                                $mess = "<p class=\"alert alert-danger\">Old password not match ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                            }else{

                                $mess = $usr -> passwordChange($user_id, $new_pass);

                            }




                        }


                    ?>
                    
                    <div class="row">
                        <div class="col-sm-10">
                            <?php  

                                if ( isset($mess) ) {
                                    echo $mess;
                                }

                            ?>
                            <section class="panel panel-default">
                                <header class="panel-heading font-bold">Change Password</header>
                                <div class="panel-body">
                                    <form class="bs-example form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Old Password</label>
                                            <div class="col-lg-10"><input name="old_pass" type="password" class="form-control" /> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">New Password</label>
                                            <div class="col-lg-10"><input name="new_pass" type="password" class="form-control" /></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Confirm Password</label>
                                            <div class="col-lg-10"><input name="confirm_pass" type="password" class="form-control" /></div>
                                        </div>

 

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10"><button name="pass" type="submit" class="btn btn-sm btn-default">Change Password</button></div>
                                        </div>

                                    </form>
                                </div>
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


