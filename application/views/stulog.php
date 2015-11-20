
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My tutor</title>

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
                    
                    <a class="navbar-brand" href="<?=base_url()?>index.php/index" style ="color:white;"><img src="<?=base_url()?>images/icon/logo3.png" style="height: 30px; width: auto;"></a>
                    <ul class="nav navbar-nav">
                    <li><a href="<?=base_url()?>index.php/tutorhome" style="color: #BBBBBB;" >Student Home</a></li></ul>
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
                    <center><h1 style="font-weight: bold;">STATISTICS</h1></center>
                <div class="col-lg-12 col-xs-12">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 col-xs-12">
                    <table class="table table-striped" style="margin-top: 30px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Start Date</th>
                                <th>Detail</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                if (count($rs)==0) {
                                    echo "<tr><td colspan='5' align='center'>---Don't Have Tutor In Your Catalog.----</td></tr>";
                                }else{
                                    foreach ($rs as $r) {
                                        echo "<tr>";
                                        echo "<th scope='row'>".$no."</th>";
                                        echo "<td>".$r['name']."</td>";
                                        echo "<td>".$r['subject']."</td>";
                                        echo "<td>".$r['start_date']."</td>";
                                        echo "<td><button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModaldetail".$r['tutor_id']."'>Detail</button></td>";
                                        echo "<td>";
                                        echo "<div class='modal fade' id='myModaldetail".$r['tutor_id']."' role='dialog'>
                                                <div class='modal-dialog'>
                                                  <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <button type='button' class='close' data-dismiss='modal'></button>
                                                        <h4 class='modal-title' >Student Detail</h4>
                                                    </div>
                                                    <div class='modal-body'style='padding:0px 50px;'>
                                                        <div class='col-lg-12'>
                                                            <div class='col-lg-4'>
                                                                <img src='".base_url()."images/tutor/".$r['pic']."' style='width: 150px; height: auto;margin-top: 50%'>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <table style='margin : 0 auto;'>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Name : </td>
                                                                        <td >".$r['name']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Telephone : </td>
                                                                        <td>".$r['tel']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Email : </td>
                                                                        <td>".$r['tu_email']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Education : </td>
                                                                        <td>".$r['education']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Subject : </td>
                                                                        <td>".$r['subject']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Study Date : </td>
                                                                        <td>".$r['student_date']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Time : </td>
                                                                        <td>".$r['time']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Start Date : </td>
                                                                        <td>".$r['start_date']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    
                                                                </table>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>";
                                        echo "</td>";

                                        echo "</tr>";

                                        $no++;
                                    }
                                    }
                            ?>
                            </tbody>
                        </table>
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
