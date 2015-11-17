
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
                    <a class="navbar-brand" href="<?=base_url()?>index.php/store">ILMI TUTOR</a>
                </div>
                <ul class="nav navbar-right top-nav">
                
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> My Name <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li>
                                <a href="<?php echo site_url("auth/logout");?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>


                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">

                    <h2 style="color:#3366ff; margin-left: 165px;font-weight: bold;">STEP</h2>
                   <p><h4 style="color:#3366ff; margin-left: 165px;font-weight: bold;">ขั้นตอนการทำงาน</p></h4>
                    <div class="col-lg-12">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <img src='<?=base_url()?>images/icon/step.png'>
                        </div>
                        <div class="col-lg-2"></div>

                    </div>
                    

                   
                    <div class="col-lg-12"style="margin-top: 50px">

                        <div class="col-lg-2"></div>
                        <div class="col-lg-3">
                            <?php echo anchor("tutorprofile", "<img src='".base_url()."/images/icon/profile.png'>");?>
                        </div>
                        <div class="col-lg-3">
                            <?php echo anchor("tutorlog", "<img src='".base_url()."/images/icon/statistics.png'>");?>
                        </div>
                        <div class="col-lg-3">
                            <?php echo anchor("tutorpayment", "<img src='".base_url()."/images/icon/money.png'>");?>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <hr style="border-width: 5px;border-color: #3366ff;">
                    </div>
                    <h2 style="color:#3366ff; margin-left: 165px;font-weight: bold;">TOP RARE</h2>
                    <p><h4 style="color:#3366ff; margin-left: 165px;font-weight: bold;">วิชายอดนิยมที่เด็กๆ ต้องการติวเตอร์</p></h4>

             <center>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12" style="margin-top: 40px">
                            <ol class="breadcrumb">
                                <li>You can contact us in this page </li>
                                <li> facebook : www.facebook.com/Telekhong</li>
                                <li> KingMongkutt's University of technology thonburi</li>
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
