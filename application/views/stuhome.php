
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Homepage</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.cropit.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.css" rel="stylesheet">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="<?=base_url()?>index.php/index" style ="color:white;"><img src="<?=base_url()?>images/icon/logo3.png" style="height: 30px; width: auto;"></a>
                </div>
             
                <ul class="nav navbar-right top-nav">
                
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('name');?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li>
                                <a href="<?php echo site_url("login/logout");?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>


                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
            </nav>
                
            <div id="page-wrapper">
                <div class="container-fluid">

                    <div id="page-wrapper">
                <div class="container-fluid">
                    <center><h1 style="font-weight: bold;"> WELCOME</h1></center>
                    
                    <div class="col-lg-12 col-xs-12">
                        
                        <div class="col-lg-6  col-xs-12">
                            <img src='<?=base_url()?>images/icon/step_2.png'style="float:right;">

                        </div>

                        <div class="col-lg-6  col-xs-12">
                            <div class="col-lg-12  col-xs-12" style="margin-top: 50px;">
                                <div class="col-lg-4  col-xs-6">
                                    <?php echo anchor("stuprofile", "<img src='".base_url()."/images/icon/profile.png'>");?>
                                </div>
                                <div class="col-lg-8  col-xs-6">
                                    <h2 style="font-weight: bold;margin-top: 25px;font-family: Trebuchet MS,Georgia, Serif;"> Profile<br><h4> ข้อมูลประวัติ</h4> </h2>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xs-12" style="margin-top: 30px;">
                                <div class="col-lg-4 col-xs-6">
                                    <?php echo anchor("sturequest", "<img src='".base_url()."/images/icon/request.png'>");?>
                                </div>
                                <div class="col-lg-8 col-xs-6">
                                    <h2 style="font-weight: bold;margin-top: 25px; font-family: Trebuchet MS,Georgia, Serif;"> Request Tutor<br><h4>ส่งคำร้องแก่ติวเตอร์</h4> </h2>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xs-12"style="margin-top: 30px;">
                                <div class="col-lg-4 col-xs-6">
                                    <?php echo anchor("stulog", "<img src='".base_url()."/images/icon/mytutor.png'>");?>
                                </div>
                                <div class="col-lg-8 col-xs-6">
                                    <h2 style="font-weight: bold;margin-top: 25px;font-family: Trebuchet MS,Georgia, Serif;"> My Tutor<br><h4>ติวเตอร์ที่เคยสอน </h4></h2>
                                </div>
                            </div>

                            

                        </div>

                        

                    </div>
                    
             <center>
                <div class="row">
                    <div class="col-lg-12  col-xs-12">
                        <div class="col-lg-12" style="margin-top: 40px">
                            <ol class="breadcrumb">
                                <li>Contact us in this page </li>
                                <li><a href="<?=base_url()?>index.php/index"> www.ilmitutor.com</li></a>
                                <li> King Mongkut's University of Technology Thonburi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </center>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    </div>
<!-- /#wrapper -->



</body>

</html>
