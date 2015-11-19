
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutor Register</title>

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

                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <center><h1 style="font-weight: bold;">Tutor Register</h1></center>
                   <!-- <form action="<?php //echo site_url();?>/createstore/create" method="post" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="javascript:return checkfield();"> -->
                
                <div class="col-lg-2"></div>
                <!-- div center -->
                <div class="col-lg-8">
                    <div style="text-align:left;margin-left: 20px;"><h3></h3>
                    <?php echo form_open("turegis/registutor");?>
                    <!-- username -->
                    <div class="col-lg-5" style="text-align:right;" >Username :</div>
                    <div class="col-lg-7"><input type="text" name="username" class="form-control" placeholder="Username" style="width:200px" id="stn"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- password -->
                    <div class="col-lg-5" style="text-align:right;" >Password :</div>
                    <div class="col-lg-7"><input type="password" name="pass" class="form-control" placeholder="Password" style="width:200px" id="stn"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- Name -->
                    <div class="col-lg-5" style="text-align:right;" >Name :</div>
                    <div class="col-lg-7"><input type="text" name="name" class="form-control" placeholder="Name" style="width:200px" id="stn"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- sex -->
                    <div class="col-lg-5" style="text-align:right;" >Gender :</div>
                    <div class="col-lg-7">
                        <select class="form-control col-lg-8" name="sex" style="width:200px ;">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                       </select>
                    </div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>
                    </div>

                    <!-- birth -->
                    <div class="col-lg-5" style="text-align:right;" >Birth Date :</div>
                    <div class="col-lg-7">
                        <input type="date" name="birth" id="birth" class="form-control" style="width:200px ; display : inline;" >
                    </div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- address -->
                    <div class="col-lg-5" style="text-align:right;" >Address :</div>
                    <div class="col-lg-7"><textarea class="form-control" name="address" rows="3" style="width:250px" placeholder="Address" id="address"></textarea></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- email -->
                    <div class="col-lg-5" style="text-align:right;"> E-Mail : </div>
                    <div class="col-lg-7"><input type="email" name="email" class="form-control" placeholder="E-Mail" style="width:200px" id="stn"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- Tel -->
                    <div class="col-lg-5" style="text-align:right;" >Telephone Number :</div>
                    <div class="col-lg-7"><input type="text" name="tel" class="form-control" placeholder="0X-XXXX-XXXX" style="width:200px" id="telnum"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- Education -->
                    <div class="col-lg-5" style="text-align:right;" >Education :</div>
                    <div class="col-lg-7"><input type="text" name="edu" class="form-control" placeholder="" style="width:300px" id="education"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div><hr>

                    <!-- Subject -->
                    <div class="col-lg-5" style="text-align:right;" >Subject :</div>
                    <div class="col-lg-7">
                        <select name="sub" class="form-control" style="width: 300px">
                            <option value="math">คณิตศาสตร์</option>
                            <option value="sci">วิทยาศาสตร์</option>
                            <option value="thai">ภาษาไทย</option>
                            <option value="social">สังคมศึกษา</option>
                            <option value="english">ภาษาอังกฤษ</option>
                        </select>
                    </div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- Detail -->
                    <div class="col-lg-5" style="text-align:right;" >Detail :</div>
                    <div class="col-lg-7"><textarea class="form-control" name="detail" rows="3" style="width:250px" placeholder="Detail" id="detail"></textarea></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- VDO -->
                    <div class="col-lg-5" style="text-align:right;" >URL VDO Demo :</div>
                    <div class="col-lg-7"><input type="text" name="vdo" class="form-control" placeholder="Only Youtube URL" style="width:200px" id="telnum"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>


                   
                    <div class="col-lg-12" style="text-align:center;margin-top:40px;" >
                        <input class="btn btn-success" type="submit" name="btsave" value="Register" style="margin-left: 30px">
                        &nbsp&nbsp&nbsp
                        <?php echo anchor("index", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                        
                        <?php echo form_close(); ?>
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
