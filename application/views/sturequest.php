
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Request </title>

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
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <h2 style="color:#3366ff;text-align :center ;font-weight: bold;">Request TUTOR</h2>
                        </div>
          
                        <div class="col-lg-4"></div>
                 </div>
                   

                <div class="col-lg-12">
                        <div class="col-lg-2">
                            <p>วันที่เริ่มเรียน : </p>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" name="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            
                                
                        </div>
                        <div class="col-lg-1"><p>ใน</p>

                         </div>
                        <div class="col-lg-3">
                            <select class="form-control" name="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                        </div>
                        <div class="col-lg-2"></div>
                </div>
                    <div class="col-lg-12">
                    <div class="col-lg-2">
                        <p>วันที่เรียน : </p>
                       </div> 
                    <div class="col-lg-1">
                       <form action="">
                            <input type="checkbox" name="vehicle" value="Bike">วันจันทร์<br> 
                        </form> 
                    </div>
                    <div class="col-lg-1">
                       <form action="">
                            <input type="checkbox" name="vehicle" value="Bike">วันอังคาร<br> 
                        </form> 
                    </div>
                    <div class="col-lg-1">
                       <form action="">
                            <input type="checkbox" name="vehicle" value="Bike">วันพุธ<br> 
                        </form> 
                    </div>
                    <div class="col-lg-1">
                       <form action="">
                            <input type="checkbox" name="vehicle" value="Bike">วันพฤหัส<br> 
                        </form> 
                    </div>
                    <div class="col-lg-1">
                       <form action="">
                            <input type="checkbox" name="vehicle" value="Bike">วันศุกร์<br> 
                        </form> 
                    </div>
                    <div class="col-lg-1">
                       <form action="">
                            <input type="checkbox" name="vehicle" value="Bike">วันเสาร์<br> 
                        </form> 
                    </div>
                    <div class="col-lg-1">
                       <form action="">
                            <input type="checkbox" name="vehicle" value="Bike">วันอาทิตย์<br> 
                        </form> 
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="col-lg-12">
                        <div class="col-lg-2">
                            <p>เวลา : </p>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" name="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            
                                
                        </div>
                        <div class="col-lg-1"><p>to</p>

                         </div>
                        <div class="col-lg-3">
                            <select class="form-control" name="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                        </div>


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
