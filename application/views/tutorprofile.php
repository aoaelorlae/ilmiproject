
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

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
                    <ul class="nav navbar-nav">
                    <li><a href="<?=base_url()?>index.php/tutorhome" style="color: #BBBBBB;" >Tutor Home</a></li></ul>
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
                    <img src="">
                    <h2 style="text-align: center;font-weight: bold;" >Profile</h2>
                </div>
                <div class="col-lg-12" style="margin-top: 50px">
                    <!-- space left -->
                    <div class="col-lg-1"></div>

                    <!-- img left -->
                    <div class="col-lg-4">
                        <center><img src="" style="width:150px;height:180px;"></center>

                         <br><br><div class="col-lg-12"></br></br>
                    
                    </div>
                    </div>

                    <!-- body center -->
                    <div class="col-lg-5">
                        <!-- username -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Username : </p>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="username" class="form-control" value="" disabled style="height: 30px;">
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- name -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Name : </p>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="name" class="form-control" value="" style="height: 30px;">
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- sex -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Gender : </p>
                            </div>
                            <div class="col-lg-7">
                                <select class="form-control" name="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- DOB -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Birth Date : </p>
                            </div>
                            <div class="col-lg-7">
                                <input type="date" name="birth" class="form-control" value="" >
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- address -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Address : </p>
                            </div>
                            <div class="col-lg-7">
                                <textarea cols="3" name="address" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- tel -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Telephone : </p>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="tel" class="form-control" value="" style="height: 30px;">
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- education -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Education : </p>
                            </div>
                            <div class="col-lg-7">
                                <textarea cols="3" name="edu" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- subject -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Subject to Teach : </p>
                            </div>
                            <div class="col-lg-7">
                                <textarea cols="3" name="subject" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- Detail -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>Detail : </p>
                            </div>
                            <div class="col-lg-7">
                                <textarea cols="3" name="detail" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 30px"></div>

                        <!-- vdo -->
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="paddind-top: 5px">
                                <p>VDO Preview : </p>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="vdo" class="form-control" value="" style="height: 30px;">
                            </div>
                            <div class="col-lg-2"><div style="color:red;">*Only Youtube URL</div></div>
                        </div>

                    </div>
                   
                    <div class="col-lg-12">
                         <br><br><center><button type="button" class="btn btn-primary">Agreement</button>
                         <button type="button" class="btn btn-primary">OK</button>
                         <button type="button" class="btn btn-primary">EDIT</button></center></br></br>
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
