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
                </ul>
 -->
                <ul class="nav navbar-right navbar-top-links">
                    <!-- <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li> -->
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

                @include('sidebar')

                <!-- /.navbar-static-side -->
            </nav>
            <form action = "/insert" method="post">
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Profile Customer</h1>
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
                                            <form role="form" method="post" action="insert">
                                                <div class="label">
                                                    <i class="fa fa-bar-chart-o fa-fw"></i> Customer   
                                                </div>

        

                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input class="form-control" name="name" id="name">

                                                <!-- <div class="form-group">
                                                    <label></label> -->
                                                </div>
                                                 <div class="form-group">
                                                    <label>Division</label>
                                                    <input class="form-control" placeholder="Enter text" style="width: 100%" name="division" id="division">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control" placeholder="Enter text" style="width: 100%" name="address" id="address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" placeholder="Enter text" style="width: 100%" name="phone" id="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" placeholder="Enter text" style="width: 100%" name="email" id="email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <input class="form-control" placeholder="Enter text" style="width: 100%" name="category" id="category">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input class="form-control" placeholder="Enter number" style="width: 100%" name="status" id="status">

                                                </div>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" name="submit" id="submit" value="add">
                                            </form>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
                                            <!-- <div class="form-group">
                                                <label>File input</label>
                                                <input type="file">
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <label>Text area</label>
                                                <textarea class="form-control" rows="3"></textarea> -->
                                            <!-- </div>
                                            <div class="form-group">
                                                <label>Checkboxes</label>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Checkbox 1
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Checkbox 2
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Checkbox 3
                                                    </label>
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <label>Inline Checkboxes</label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">1
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">2
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">3
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label>Radio Buttons</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                                    </label>
                                                </div> -->
                                                <!-- < --><!-- div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                                    </label>
                                                </div>
                                            </div> -->
                                           
                                        <!-- </form> -->
                                <!-- </div> -->
                                    <!-- /.col-lg-6 (nested) -->
                                <!-- </div> -->
                                <!-- /.row (nested) -->
                            <!-- </div> -->
                            <!-- /.panel-body -->
                        <!-- </div> -->
                        <!-- /.panel -->
                    <!-- </div> -->
                    <!-- /.col-lg-12 -->
                <!-- </div> -->
                <!-- /.row -->
            <!-- </div> -->
            <!-- /#page-wrapper -->

        <!-- </div> -->
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
