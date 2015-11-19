<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Student Register</title>

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


</head>
<body>
		
	<div id="page-wrapper">

                <center><h1 style="font-weight: bold;">Student Register</h1></center><hr>

                <!-- <form action="<?php //echo site_url();?>/createstore/create" method="post" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="javascript:return checkfield();"> -->
                
                <div class="col-lg-2"></div>
                <!-- div center -->
                <div class="col-lg-8">
                    <div style="text-align:left;margin-left: 20px;"><h3></h3>
                    <?php echo form_open("sturegis/addstu");?>
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

                    <!-- nickname -->
                    <div class="col-lg-5" style="text-align:right;" >Nickname :</div>
                    <div class="col-lg-7"><input type="text" name="nickname" class="form-control" placeholder="Nickname" style="width:200px" id="stn"></div>
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

                    <!-- email -->
                    <div class="col-lg-5" style="text-align:right;"> E-Mail : </div>
                    <div class="col-lg-7"><input type="email" name="email" class="form-control" placeholder="E-Mail" style="width:200px" id="stn"></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

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

                    <!-- Tel -->
                    <div class="col-lg-5" style="text-align:right;" >Telephone Number :</div>
                    <div class="col-lg-7"><input type="text" name="tel" class="form-control" placeholder="0X-XXXX-XXXX" style="width:200px" id="telnum" onkeypress= numCheck();></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div>

                    <!-- School Name -->
                    <div class="col-lg-5" style="text-align:right;" >School Name :</div>
                    <div class="col-lg-7"><input type="text" name="school" class="form-control" placeholder="Ilmi School" style="width:300px" id="telnum" onkeypress= numCheck();></div>
                    <div class="col-lg-12" style="margin-top:30px;"></div><hr>


                   
                    <div class="col-lg-12" style="text-align:center;margin-top:40px;" >
                        <input class="btn btn-success" type="submit" name="btsave" value="Register" style="margin-left: 30px">
                        &nbsp&nbsp&nbsp
                        <?php echo anchor("index", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                        
                        <?php echo form_close(); ?>
                    </div>


                </div>
                <!-- end div center -->
                <div class="col-lg-2"></div>
                

                
            <!-- </form> -->

            <div>
             <br>
             
         </div>

        

         <center>
            <div class="row">
                <div class="col-lg-12" style="margin-top: 40px">
                   <ol class="breadcrumb">
                     <li>Contact us in this page </li>
                     <li><a href="<?=base_url()?>index.php/index"> www.ilmitutor.com</li></a>
                     <li> King Mongkut's University of Technology Thonburi</li>
                            </ol>
                 </ol>
             </div>
         </div>
     </center>
     <!-- /.container-fluid -->

 </div>
 <!-- /#page-wrapper -->



	
	
</body>
</html>