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

                <!-- <ul class="nav navbar-nav navbar-left navbar-top-links">
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
                        <h1 class="page-header">Customer-Vendor</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-14">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Vendor</th>
                                                <th>Action</th>
                                                <th>Details</th>
                                                <th>Decision</th>
                                            </tr>
                                            @for ($i = 0; $i < count($vendorNames); $i++)
                                            <tr>
                                                <td>{{ $customerNames[$i] }}</td>
                                                <td>{{ $vendorNames[$i] }}</td>
                                                <td>
                                                    <form action="{{ action('ParameterVendor@index')}}" method="get">
                                                    @if($kerjasamaDetail[$i]->ratarata ==  null)
                                                    <button type="submit" class="btn btn-outline btn-success" style="height: 40px; width: 150px">Input Parameter
                                                    </button>
                                                    <input type="hidden" name="kerjasamaId" value="{{$kerjasamaDetail[$i]->id}}">
                                                    @else
                                                    <button type="button" class="btn-default btn-circle" disabled="disabled" style="height: 40px; width: 150px"><i class="fa fa-check">Done</i>
                                                    </button>
                                                    @endif
                                                    </form>
                                                    <div class="form-group">
                                                    <label></label>
                                                    <form action="{{ action('ParameterVendor@show')}}" method="get">
                                                        <button type="submit" class="btn btn-outline btn-warning" style="height: 40px; width: 150px">Edit Parameter
                                                        </button>
                                                        <input type="hidden" name="kerjasamaId" value="{{$kerjasamaDetail[$i]->id}}">
                                                    </form>
                                                    <div class="form-group">
                                                    <label></label>
                                                <form action="{{ action('ParameterVendor@destroy')}}" method="post">
                                                {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-outline btn-danger" style="height: 40px; width: 150px">Delete Parameter
                                                    </button>
                                                    <input type="hidden" name="kerjasamaId" value="{{$kerjasamaDetail[$i]->id}}">
                                                </form>
                                                </td>
                                                <td>
                                                <form action="{{ action('DetailKerjaSamaController@index')}}" method="get">
                                                    <button type="submit" class="btn" style="height: 40px">Hasil Akhir
                                                    </button>
                                                    <input type="hidden" name="kerjasamaId" value="{{$kerjasamaDetail[$i]->id}}">
                                                </form>
                                                </td>
                                                <td>
                                                @if($decision[$i] == null)
                                                @else
                                                    @if($decision[$i] <= 20)
                                                    Change Vendor with another provider
                                                    @elseif($decision[$i] <= 40)
                                                    Maintained as vendor but will be evaluated after 6 months
                                                    @elseif($decision[$i] <= 60)
                                                    Maintained as vendor but will be evaluated after 3 months
                                                    @elseif($decision[$i] <= 100)
                                                    Maintained as vendor
                                                    @endif
                                                @endif
                                                </td>
                                            </tr>
                                            @endfor
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                
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
