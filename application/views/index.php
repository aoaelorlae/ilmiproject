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

	<script src="<?=base_url()?>assets/js/script.js"></script>

	<!-- Load jQuery -->
	<script type="text/javascript" src="../../ilmiproject/asset/js/jquery-1.11.2.min.js"></script>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="../../ilmiproject/asset/js/bootstrap.js"></script>

	<script type="text/javascript" src="../../ilmiproject/asset/js/smooth-scroll.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Load custom js for theme -->
	<script type="text/javascript" src="../../ilmiproject/asset/js/app.js"></script>
	<style>
	p.italic p.sansserif {
    font-style: italic;font-family: Arial, Helvetica, sans-serif;
}
	p.dashed {border-style: dashed;}
	p.double {border-style: double;}
    p.five {
    border-style: double;
    border-width: 5px;
}
	</style>
			
</head>
<body style="background: #FFFFFF;">
	<script type="text/javascript">
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
	</script>


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
		          	<li><a href="#home" style="color: #BBBBBB;" >Home</a></li>
		          	<li><a href="#about" style="color: #BBBBBB;">Users</a></li>
		          	<li><a href="#what" style="color: #BBBBBB;">What is ILMI</a></li>
		          	<li><a href="#gallery" style="color: #BBBBBB;">About</a></li>


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
		            		echo anchor("login", "<button id='butlog' type='button' class='btn btn-info'>Login</button>");
		            	?>
		        </ul>
		        <ul class="nav navbar-right top-nav" >
		            <li>
		            	<button type="button" class="btn btn-warning" id="butregis" data-toggle="modal" data-target="#myModal7">Register</button></li>
		            </li>
		        </ul>
		        <style type="text/css">
					ul li:hover {background: #3366FF;}
					ul li:hover ul {display: block;}

					.btn btn-warning:hover{background-color: #f0ad4e;}
					.btn btn-info:hover{background-color: #5bc0de;}
				</style>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<div class="header-info">
				<h1>ILMI</font>
				<p><i>ILMI</i>   in Swedish is mean 'Knowledge'<br>
				<p class="ansserifs">
				<p class="italic;ansserifs"><font size=-1>Kingdom of Learning and prepare for yourself to study or increase your score.<br>
				You can find fit teacher(s) in many lessons and more interested things with us. Come and join!!</font></p></p></p>
				<!-- <a href="#" class="btn btn-primary">JOIN US</a> -->
				<button type="button" class="btn btn-info pull-center " data-toggle="modal" data-target="#myModal7" style="margin-right:10px;background-color: yellow;color:#d58512; border-color: #d58512;">JOIN US</button>
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


	<section id="about"style="background: white; align:center; height:100vh;">
		<div class="container">
			<h1 style="color:#ec971f;text-align: center;margin-bottom: 2%; ">USERS IN ILMITUTOR</h1>
			<p style="color:#ec971f;text-align: center; margin-top:-20px;">จำนวนของนักเรียนและติวเตอร์ที่ใช้งานอิลมี่</p>
			<div class="row">
				<div class="col-md-12" style="margin-top: 40px;">
				<div class="col-md-3"></div>
					<div class="col-md-3" style="background: white;height:100%;">
						<div class="service-item"style="padding-top: 7%;padding-bottom: 12%;">
							<p class="five" style="width: 200px;height: 100px ;border-color:#3366ff;margin:auto;">300</p>
							 <button style="background:#ec971f;width: 200px;height: 85px; margin-top:10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8"><h5 style="color:white" >STUDENT</h></button>
							
						</div>
					</div>
					
					<div class="col-md-3"style="background: white;height:100%;">
						<div class="service-item" style="padding-top: 7%;padding-bottom: 12%;">
						<p class="five"style="width: 200px;height: 100px ;border-color:#3366ff;margin:auto;">300</p>
							<button style="background:#ec971f;width:200px;height: 85px ; margin-top:10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal9"><h5 style="color:white" >TUTOR</h5></button>
							
						</div>
					<div class="col-md-3"></div>

 					</div>

 					<div class="col-md-12" style="margin-top: 130px; ">
 						<div class="col-md-4"></div>
 						<div class="col-md-4">
 						<div class="icon"><i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						<i class="fa fa-diamond fa-2" style= "color:#ec971f;"></i>
 						</div>
 						<div class="col-md-4"></div>

<!-- modal join us -->
	<div class="modal fade" id="myModal8" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Statics STUDENT</h4>
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
					
			<!-- modal join us -->
	<div class="modal fade" id="myModal9" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Statics TUTOR</h4>
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
			</div>
		</div>
	</section>



	<!-- Services section start -->
	
	<section id="what"style="background: white;height:100vh;">
		<div class="container">
			<h1 style="color:#3366ff;text-align: center;margin-bottom: 2%; ">What is ILMI</h1>
			
			<div class="col-md-12" style="background-color: #3366ff;height:150px; ">
				<p style="color:white; text-align:center;margin-top: 30px;"> ILMI เป็นสื่อกลางที่นำติวเตอร์และนักเรียนมาอยู่ร่วมกัน เพื่อเปิดโอกาสให้ติวเตอร์หน้าใหม่<br>ได้มาเริ่มธุรกจทางด้านการติวและนักเรียนสามารถหาผู้สอนได้ตามใจชอบ <br>ILMI มีประสิทธิภาพทางด้านการประมวลผลมีความรวดเร็ว<br>สร้างความพึ่งพอใจให้กับผู้ใช้งาน</p>
			</div>
			 
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4" style="height:100%; margin-top:30px;">
						<div class="service-item"style="padding-top: 7%;">
							<div class="icon" ><i class="fa fa-database" ></i></div>
							<h3 style="color:#3366ff" >Easy&Fast</h3>
							
						</div>
					</div>
					
					<div class="col-md-4"style="height:100%;margin-top:30px;">
						<div class="service-item" style="padding-top: 7%;">
							<div class="icon"><i class="fa fa-book"></i></div>
							<h3 style="color:#3366ff" >Intermediate</h3>
							
						</div>
					</div>

					<div class="col-md-4"style="height:100%;margin-top:30px;">
						<div class="service-item"  style="padding-top: 7%;">
							<div class="icon"><i class="fa fa-users"></i></div>
							<h3 style="color:#3366ff">Chance</h3>
							
						</div>
					</div>
				</div>
				 
				
			</div>
		</div>
	</section>

	 
	 <section id="gallery" style="background: white;height:100vh; background-image: url('<?=base_url()?>images/icon/ilmi.jpg');">
		<div class="container" style="margin:auto;">
			<div class="row">
				
				
						
							
			</div>
		</div>
	</section>
				
	

	<!-- Portfolio section end -->
	
	<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<ul class="social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-behance"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest"></i></a></li>
						</ul>
					
					<br><h style="color:#3366ff;  margin-left 4%;color:white">Copyright © 2015 ilmi, All Rights Reserved</h>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end  -->

	
</body>
</html>