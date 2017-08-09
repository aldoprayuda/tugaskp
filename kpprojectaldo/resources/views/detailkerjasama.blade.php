<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="homehome">PosLogistik</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               <!--  <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> -->

                <ul class="nav navbar-right navbar-top-links">
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
                <!-- /.navbar-top-links -->

                 @include ('sidebar')
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vendor</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{{ action('ParameterVendor@store')}}" method="post">
                                        {{ csrf_field() }}
                                            <div class="label">
                                                <i class="fa fa-bar-chart-o fa-fw"></i> 
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Customer</label>
                                                <label>{{$nameCustomer}}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Vendor</label>
                                                <label>{{$nameVendor}}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Parameter Vendor</label>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>Quality</label> 
                                                <input class="form-control" name="quality" readonly placeholder="{{$detailParameter->Quality}}" style="width: 35%">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>Delivery</label>
                                                <input class="form-control" name="delivery" readonly placeholder="{{$detailParameter->Delivery}}" style="width: 35%">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>Services</label>
                                                <input class="form-control" name="services" readonly placeholder="{{$detailParameter->Service}}" style="width: 35%">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>Price</label>
                                                <input class="form-control" name="price" readonly placeholder="{{$detailParameter->Price}}" style="width: 35%";>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>HSE</label>
                                                <input class="form-control" name="hse" readonly placeholder="{{$detailParameter->HSE}}" style="width: 35%">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>Policy</label>
                                                <input class="form-control" name="policy" readonly placeholder="{{$detailParameter->Policy}}" style="width: 35%">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label></label>
                                            </div> 
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label></label>
                                            </div> 
                                            </div>
                                            <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>Average</label>
                                                <label><input type="text" name="kerjasama_id" readonly placeholder="{{$categorykerjasama}}" >
                                                </label>
                                            </div> 
                                            </div>

                                            <button type="submit" class="pull-right" class="btn btn-default"><a href="tables">Input
                                            </a></button>
                                            <input type="hidden" name="kerjasamaId" value="{{$idKerjasama}}">
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
