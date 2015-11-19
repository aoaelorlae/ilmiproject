<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Login</title>

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
<body >	

	<div id="wrapper" style="padding-left: 0px;">

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
                    <a class="navbar-brand" href="#" style ="color:white;">ILMITUTOR.COM</a>
            </div>
             <div>
              


                <ul class="nav navbar-right top-nav">             

                
            </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                
            </nav>

            <div id="page-wrapper" style="background-image: url('<?=base_url()?>images/icon/IMG_5167.jpg');background-size: cover; background-position-y: 90%;height: 80vh">
                <div class="container-fluid">
                	<div class="col-lg-4 col-sm-1"></div>
                	<div class="col-lg-4 col-sm-6" style="background: rgba(255,255,255,0.65);border-radius: 30px;height: 30%;margin-top: 10%;">
                		<h1 style="text-align: center;padding-top: 5%">Login</h1>
                        <?php echo form_open("login/loginuser");?>
                		<input type="text" class="form-control" name="username" placeholder="Username" style="width: 80%; margin: 0px auto; margin-top: 5%">
                		<input type="password" class="form-control" name="pass" placeholder="Password" style="width: 80%; margin: 0px auto; margin-top: 5%">
                        <?php 
                            if ($warn == 1) {
                                echo "<p style='color: red;'>Username or Password Incorrect</p>";
                            } 
                        ?>
                		<center><button type="submit" class="btn btn-success" style="width: 30%; margin: 0px auto; margin-top: 7%;margin-bottom: 5% ">Login</button></center>
                	   <?php echo form_close();?>   
                    </div>
                	<div class="col-lg-4 col-sm-1"></div>
                
	
				
				
				
				</div>
	
                

        <div>
           <br>
       </div>

       
 <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
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

	
	
</body>
</html>