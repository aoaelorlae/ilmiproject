<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Register Owner</title>

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

                <center><h3>Student Register</h3></center><hr>

                <!-- <form action="<?php //echo site_url();?>/createstore/create" method="post" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="javascript:return checkfield();"> -->
                <!-- username -->
                <div class="col-lg-6" style="text-align:right;" >Username :</div>
                <div class="col-lg-6"><input type="text" name="username" class="form-control" placeholder="Username" style="width:200px" id="stn"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- password -->
                <div class="col-lg-6" style="text-align:right;" >Password :</div>
                <div class="col-lg-6"><input type="password" name="pass" class="form-control" placeholder="Password" style="width:200px" id="stn"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- Name -->
                <div class="col-lg-6" style="text-align:right;" >Name :</div>
                <div class="col-lg-6"><input type="text" name="name" class="form-control" placeholder="Name" style="width:200px" id="stn"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- nickname -->
                <div class="col-lg-6" style="text-align:right;" >Nickname :</div>
                <div class="col-lg-6"><input type="text" name="nickname" class="form-control" placeholder="Nickname" style="width:200px" id="stn"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- sex -->
                <div class="col-lg-6" style="text-align:right;" >Gender :</div>
                <div class="col-lg-6">
                    <select class="form-control col-lg-8" name="pack" style="width:300px ;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                   </select>
                </div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- email -->
                <div class="col-lg-6" style="text-align:right;" >E-Mail :</div>
                <div class="col-lg-6"><input type="email" name="email" class="form-control" placeholder="E-Mail" style="width:200px" id="stn"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- birth -->
                <div class="col-lg-6" style="text-align:right;" >Birth Date :</div>
                <div class="col-lg-6">
                    <input type="date" name="birth" id="birth" class="form-control" style="width:280px ; display : inline;" >
                </div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- address -->
                <div class="col-lg-6" style="text-align:right;" >Address :</div>
                <div class="col-lg-6"><textarea class="form-control" name="address" rows="3" style="width:250px" placeholder="Address" id="address"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store Tel -->
                <div class="col-lg-6" style="text-align:right;" >Telephone Number :</div>
                <div class="col-lg-6"><input type="text" name="tel" class="form-control" placeholder="0X-XXXX-XXXX" style="width:200px" id="telnum" onkeypress= numCheck();></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store Open Time -->
                <div class="col-lg-6" style="text-align:right;" >Open Time :</div>
                
                <div class="col-lg-2">
                    <div >
                        <input id="time1" type="time" class="form-control input-small" name="opti"  >
                    
                </div>
                </div>
                <div class="col-lg-1" style="text-align:center">to</div>
                <div class="col-lg-2">
                    <div >
                        <input id="time2" type="time" class="form-control input-small" name="clti" >
                    
                </div>
                </div> 
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store detail -->
                <div class="col-lg-6" style="text-align:right;" >Store Detail :</div>
                <div class="col-lg-6"><textarea class="form-control" name="detail" rows="3" style="width:250px" placeholder="Detail of Store" id="des"></textarea></div>


                <div class="col-lg-12" style="margin-top:10px;"></div>
                    
                    
                    <div class="col-lg-12">&nbsp</div>
                    <div class="col-lg-6" style="text-align:right;" >Package :</div>
                    <div class="col-lg-6">
                    <select class="form-control col-lg-8" name="pack" style="width:300px ;">

                      <?php
                        foreach ($pack as $r) {
                            echo "<option value='".$r['package_id']."'>Package ".$r['package_name']." : ".$r['price']."B/month</option>";
                        }
                        
                      ?>
                   </select>
                   
                   

                    </div>  
            <div class="col-lg-12" style="text-align:center;margin-top:40px;" >
                <input class="btn btn-success" type="submit" name="btsave" value="Create & Pay" style="margin-left: 30px">
                &nbsp&nbsp&nbsp
                <?php echo anchor("store", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                
            </div>
            </form>

            <div>
             <br>
             
         </div>

        

         <center>
            <div class="row">
                <div class="col-lg-12" style="margin-top: 40px">
                   <ol class="breadcrumb">
                     <li>You can contact us in this page </li>
                                <li> facebook : www.facebook.com/Telekhong</li>
                                <li> KingMongkutt's University of technology thonburi</li>
                 </ol>
             </div>
         </div>
     </center>
     <!-- /.container-fluid -->

 </div>
 <!-- /#page-wrapper -->



	
	
</body>
</html>