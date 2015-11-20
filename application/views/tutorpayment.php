
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment</title>

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
        <style>
        table, th, td {
        border: 1px solid black;
        }
        </style>
    
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
                <div class="container-fluid" style="height: 70vh">
        <div class="col-lg-12">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                    
                    <Form method="post" action="https://www.paysbuy.com/paynow.aspx">
                        <div class="col-lg-12" style="margin-top:20px;text-align: center; border-style: solid;border-color:#59AC59;">
                            <h2 style="color:#3366ff; text-align: center;font-weight: bold;margin-top: 30px;margin-bottom: 30px;">Payment Here</h2> 
                            <input type="Hidden" Name="psb" value="psb"/> 
                            <input Type="Hidden" Name="biz" value="panvasa5622@gmail.com"/> 
                            
                            
                            <script type="text/javascript">
                                window.onload=function(){
                                    var stoid = '<?php echo $store ?>';
                                    var setval = 'pack'+stoid+'01';
                                    $("#inv").attr("value",setval);
                                }
                            </script>

                            <!-- inv is Some String text from paysbuy-->
                            <input Type="Hidden" Name="inv" id="inv" value=""/> 
                            <input Type="Hidden" Name="itm" value="Service Charge"/> 
                            
                            <!-- amt is Store Package Charge--> 
                            <input Type="Hidden" Name="amt" value="1" id="price"/>
                            
                            <!-- Redirect Web Controller-->
                            <input Type="Hidden" Name="postURL" value="http://www.ilmitutor.com/index.php/tutorpayment/checkpayment"/> 
                            <input type="image" style="margin-bottom: 30px;" src="https://www.paysbuy.com/imgs/L_click2buy.gif" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!"/> 
                        </div>
                    </Form>      
        </div>
            <div class="col-lg-4"></div>

        </div>

        <div class="col-lg-12">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                    <h4 style="color:#3366ff; font-weight: bold; text-align: center; ">Choose Request</h4>       
        </div>
            <div class="col-lg-4"></div>

        </div>
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: #6366ef;">
                            <th style="text-align: center;">Select</th>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Study Day</th>
                            <th style="text-align: center;">Start Date</th>
                            <th style="text-align: center;">Time</th>
                            <th style="text-align: center;">Location</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        $no = 1;
                        foreach ($re as $r) {
                            if ($r['subject'] === $tu['subject']) {
                                echo "<tr>";
                                echo "<td style='text-align: center;'><input type='radio'  name='request' value='".$r['request_id']."'></td>";
                                echo "<td style='text-align: center;'>".$no."</td>";
                                echo "<td style='text-align: center;'>".$r['student_date']."</td>";
                                echo "<td style='text-align: center;'>".$r['start_date']."</td>";
                                echo "<td style='text-align: center;'>".$r['time']."</td>";
                                echo "<td style='text-align: center;'>".$r['location']."</td>";
                                echo "</tr>";
                                $no++;
                            }
                        }


                    ?>

                    </tbody>
                    
                    
                </table>
            </div>

            </div>
            <div class="col-lg-1"></div>


        </div>



            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
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
    </div>
<!-- /#wrapper -->



</body>

</html>
