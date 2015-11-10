<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ILMI: World of Knowledge</title>

	<!-- Load fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	<link rel="javascript" type="text/javascript" href="../../ilmiproject/asset/js/bootstrap.js">
	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="../../ilmiproject/asset/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../../ilmiproject/asset/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="../../ilmiproject/asset/css/style.css" />

</head>
<body>
	<div class="jumbotron home home-fullscreen" id="home">
		<div class="mask"></div>
		
		<nav class="navbar navbar-inverse navbar-fixed-top" id="menubar" style="background-color: white;">
		  <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#" style ="color:#3366FF;">ILMITUTOR.COM</a>
		    </div>
		    <div>
		      <div class="collapse navbar-collapse col-lg-10" id="myNavbar">
		        <ul class="nav navbar-nav">
		          	<li><a href="#home" id="menu" >Home</a></li>
		          	<li><a href="#about" >About Us</a></li>
		          	<li><a href="#about" >How to</a></li>


		        </ul>
				
					        

		      </div>
		    <style type="text/css">
		    	/*#limenu>a {
				    position: relative;
				    display: block;
				    padding: 10px 15px;
				    margin-top : -15px;
				    margin-left : -15px;
				}*/
		    </style>
		        <ul class="nav navbar-right top-nav" >
		            	<?php
		            		echo anchor("login", "<button type='button' class='btn btn-info'>Login</button>");
		            	?>
		        </ul>
		        <ul class="nav navbar-right top-nav" >
		            <li>
		            	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal7">Register</button></li>
		            </li>
		        </ul>
		        <style type="text/css">
					ul li:hover {background: #3366FF;}
					ul li:hover ul {display: block;}
				</style>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<div class="header-info">
				<h1>ILMI</font>
				<p><i>ILMI</i>   in Swedish is mean 'Knowledge'<br>
				<font size=-1>Kingdom of Learning and prepare for yourself to study or increase your score.<br>
				You can find fit teacher(s) in many lessons and more interested things with us. Come and join!!</font></p>
				<!-- <a href="#" class="btn btn-primary">JOIN US</a> -->
				<button type="button" class="btn btn-info pull-center " data-toggle="modal" data-target="#myModal7" style="margin-right:10px;background-color: yellow;color: #3366ff;">JOIN US</button>
			</div>
		</div>
	</div>


	<!-- modal join us -->
	<div class="modal fade" id="myModal7" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >REGISTER ACCOUNT</h4>
                </div>
                <div class="modal-body"style=" text-align: center;height : 220px;">
                    <div class="col-xs-12" id="status">
                        <div class="col-xs-6">
                        	<button type="button" class="btn btn-default" style="background-color: #3366ff;color:white;margin-top: 30%">Register Student</button>
                        </div>
                        <div class="col-xs-6">
                        	<button type="button" class="btn btn-default" style="background-color: #3366ff;color:white;margin-top: 30%">Register Tutor</button>
                        	
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="float : right; margin-right : 20px">Close</button>
                </div>

            </div>
        </div>

    </div>






	<!-- Services section start -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><i class="fa fa-diamond" ></i></div>
						<h3 style="color:#3366ff">We Are Less Difficult</h3>
						<p>Design for many ages of anonymous and have discription in every step to use ILMITUTOR
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><i class="fa fa-diamond"></i></div>
						<h3 style="color:#3366ff">We Are Beautiful</h3>
						<p>Our team produced and easy and beauty website สวยยยยยยยยยยยย
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="icon"><i class="fa fa-diamond"></i></div>
						<h3 style="color:#3366ff">We Know You Want Us</h3>
						<p>สื่อกลางเครือข่ายการติดต่อระหว่่างติวเตอร์และนักเรียนที่สนใจ คุณสามารถค้นหาวิชาที่สนใจทั้งเรียนหรือสอนได้จากพวกเรา ทางเราคัดสรรบุคคลสมาชิกที่มีตัวตนจริง มีการตรวจสอบก่อนยืนยันการใช้งาน
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	 
	 <section id="about">
		<div class="container">
			<div class="row">
				<div class="img-circle">
					<h3 style="color:#3366ff;text-align: center;">How to ...</h3>
						
						<div class="icon"></div>
						 <img src="<?=base_url()?>images/icon/pic1.jpg" class="img-circle" alt="howto1" style="border-style: solid;border-width: 1px;width: 140px;height: 140px">
						 <img src="" class="img-circle" alt="howto2" >
						 <img src="" class="img-circle" alt="howto3" >

						</p>
					</div>
				
	<div class="icon"></div>
						 <img src="<?=base_url()?>images/icon/pic1.jpg" class="img-circle" alt="howto1" style="border-style: solid;border-width: 1px;width: 140px;height: 140px">
						 <img src="" class="img-circle" alt="howto2" >
						 <img src="" class="img-circle" alt="howto3" >

						</p>
					</div>


	<!-- Portfolio section end -->
	
	<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
				</div>
				<div class="col-md-4">
					<ul class="social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-behance"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end  -->

	<!-- Load jQuery -->
	<script type="text/javascript" src="../../ilmiproject/asset/js/jquery-1.11.2.min.js"></script>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="../../ilmiproject/asset/js/bootstrap.js"></script>

	<script type="text/javascript" src="../../ilmiproject/asset/js/smooth-scroll.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Load custom js for theme -->
	<script type="text/javascript" src="../../ilmiproject/asset/js/app.js"></script>
</body>
</html>