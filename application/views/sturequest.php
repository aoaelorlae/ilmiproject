
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
                    <a class="navbar-brand" href="<?=base_url()?>index.php/index">ILMITUTOR.COM</a>
                    <ul class="nav navbar-nav">
                    <li><a href="<?=base_url()?>index.php/stuhome" style="color: #BBBBBB;" >Student Home</a></li></ul>
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
                            <h1 style="text-align :center ;font-weight: bold;">REQUEST TUTOR</h1>
                        </div>
          
                        <div class="col-lg-4"></div>
                    </div>

                    <?php echo form_open("sturequest/addrequest"); ?>
                   
                    <div class="col-lg-12" style="margin-top: 30px;"></div>
                    <div class="col-lg-12">
                        <div class="col-lg-2"></div>

                        <div class="col-lg-8">
                            <!-- startdate -->
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <p>วันที่เริ่มเรียน</p>
                                </div>
                                <div class="col-lg-3">
                                    <input type="date" name="start" class="form-control" >
                                </div>
                                <div class="col-lg-7"></div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px;"></div>
                            <!-- study date -->
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <p>ต้องการเรียนวันไหนบ้าง</p>
                                </div>
                                <div class="col-lg-9">
                                    <input type="checkbox" name="study[]" value="monday"> วันจันทร์
                                    <input type="checkbox" name="study[]" value="tuesday" style="margin-left: 10px"> วันอังคาร
                                    <input type="checkbox" name="study[]" value="wednesday" style="margin-left: 10px"> วันพุธ
                                    <input type="checkbox" name="study[]" value="thursday" style="margin-left: 10px"> วันพฤหัสบดี
                                    <input type="checkbox" name="study[]" value="friday" style="margin-left: 10px"> วันศุกร์
                                    <input type="checkbox" name="study[]" value="saterday" style="margin-left: 10px"> วันเสาร์
                                    <input type="checkbox" name="study[]" value="sunday" style="margin-left: 10px"> วันอาทิตย์
                                </div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px;"></div>

                            <!-- time -->
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <p>เวลาที่ต้องการเรียน</p>
                                </div>
                                <div class="col-lg-3">
                                    <input type="time" name="timestart" class="form-control" >
                                </div>
                                <div class="col-lg-1">
                                    <p style="text-align: center;">ถึง</p>
                                </div>
                                <div class="col-lg-3">
                                    <input type="time" name="timeend" class="form-control" >
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px;"></div>

                            <!-- subject -->
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <p>วิชาที่ต้องการเรียน</p>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" name="sub" class="form-control" >
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px;"></div>

                            <!-- level -->
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <p>ระดับชั้น</p>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" name="level" class="form-control" >
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px;"></div>

                            <!-- localtion -->
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <p>บริเวณที่ต้องการเรียน</p>
                                </div>
                                <div class="col-lg-4">
                                    <textarea class="form-control" name="location" placeholder="เขตคลองเตย ถนนพระราม4 ซอย 22 กรุณาระบุให้ชัดเจน" cols="3"></textarea>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px;"></div>

                            <!-- detail -->
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <p>สิ่งที่ต้องการบอกผู้สอน</p>
                                </div>
                                <div class="col-lg-4">
                                    <textarea class="form-control" name="detail" placeholder="เรียนค่อนข้างช้า สมาธิสั้น" cols="3"></textarea>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px;"></div>

                            <!-- submit -->
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success" style="margin-left: 10px; float: right;">Submit</button>
                                </div>
                                <div class="col-lg-6">
                                    <?php echo anchor("stuhome","<button type='button' class='btn btn-warning' style='margin-right: 10px; float: left;'>Cancle</button>"); ?>
                                </div>
                                <?php echo form_close(); ?>
                            </div>


                        </div>

                        <div class="col-lg-2"></div>
                    </div>
                    
                            
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
