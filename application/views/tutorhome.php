
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutorhome</title>

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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>index.php/index">ILMITUTOR.COM</a>
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
                    <center><h1 style="font-weight: bold; margin-bottom:20px;"> WELCOME</h1></center>

                    <div class="col-lg-12">

                        <center>                        
                        <div class="col-lg-6">
                        <img src='<?=base_url()?>images/icon/step_3.png'style="float:right;">

                        </div></center>
                        <div class="col-lg-6">
                            <div class="col-lg-12" style="margin-top: 50px;margin-left:20px;">
                                <div class="col-lg-4">
                                    <?php echo anchor("tutorprofile", "<img src='".base_url()."/images/icon/profile_2.png'>");?>
                                </div>
                                <div class="col-lg-8">
                                    <h2 style="font-weight: bold;margin-top: 25px;font-family: Trebuchet MS,Georgia, Serif;"> Profile<br><h4> ข้อมูลประวัติ</h4> </h2>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin-top: 30px;margin-left:20px;">
                                <div class="col-lg-4">
                                    <?php echo anchor("tutorlog", "<img src='".base_url()."/images/icon/statistics.png'>");?>
                                </div>
                                <div class="col-lg-8">
                                    <h2 style="font-weight: bold;margin-top: 25px; font-family: Trebuchet MS,Georgia, Serif;"> Statistics<br><h4>สถิติการสอน</h4> </h2>
                                </div>
                            </div>

                            <div class="col-lg-12"style="margin-top: 30px;margin-left:20px;">
                                <div class="col-lg-4">
                                    <?php echo anchor("tutorpayment", "<img src='".base_url()."/images/icon/money.png'>");?>
                                </div>
                                <div class="col-lg-8">
                                    <h2 style="font-weight: bold;margin-top: 25px;font-family: Trebuchet MS,Georgia, Serif;"> Payment<br><h4>รายละเอียดด้านการเงิน </h4></h2>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                    

                   
                  
                    <div class="col-lg-12">
                        <hr style="border-width: 5px;margin-top:70px;border-color: #d2d3d0;">
                    </div>
                    <h2 style="color:#3366ff; margin-left: 165px;font-weight: bold;">TOP RATE</h2>
                    <p><h4 style="color:#3366ff; margin-left: 165px;font-weight: bold;">วิชายอดนิยมที่เด็กๆ ต้องการติวเตอร์</p></h4>

             <center>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12" style="margin-top: 40px">
                            <ol class="breadcrumb">
                                <li>Contact us in this page </li>
                                <li><a href="<?=base_url()?>index.php/index"> www.ilmitutor.com</li></a>
                                <li> King Mongkut's University of Technology Thonburi</li>
                            </ol>
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
