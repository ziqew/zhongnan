<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>



    <!-- Begin Page Progress Bar Files -->
    <script type="text/javascript" src="assets/js/plugins/pace-0.5.1/pace.min.js"></script>
    <link href="assets/js/plugins/pace-0.5.1/themes/pace-theme-minimal.css" rel="stylesheet">
    <!-- // Page Progress Bar Files -->

    <!-- Core CSS - Include with every page -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="assets/css/plugins/timeline/timeline.css" rel="stylesheet">
    <link href="assets/css/plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet"/>
    <!-- Date Range Picker Stylesheet -->
    <link href="assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <!-- <link rel="stylesheet/css" href="../assets/css/plugins/cupertino/jquery-ui.min.css" /> -->
    <link href="assets/css/plugins/calendar/fullcalendar.css" rel="stylesheet"/>


    <link href="assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"/>


    <!-- Add custom CSS here -->
    <script type="text/javascript">
        less = {
            env: "development", // or "production"
        };
    </script>

    <link href="assets/css/style_default.css" rel="stylesheet" id="style_color"/>

    <!-- Style LESS -->
    <link href="assets/less/animate.less?1399829564" rel="stylesheet/less"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <button type="button" class="navbar-toggle pull-left margin left" data-toggle="collapse"
            data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="?page=index">
        <img src="../assets/images/d1-logo.png">
    </a>
    <!-- <div class="pull-right hidden-xs">
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-info"><i class="fa fa-desktop"></i></button>
            <button type="button" class="btn btn-info"><i class="fa fa-cogs"></i></button>
        </div>
    </div> -->
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-left hidden-xs">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-cogs fa-fw"></i>
        </a>

        <div class="dropdown-menu dropdown-personalize animated flipInY">
            <h5>Personalize Theme</h5>

            <div class="row">
                <div class="col-sm-2">
                    <a href="#" class="switch-style" data-toggle="tooltip" data-placement="top" title="Default"
                       data-color="#18bc9c" data-style="style_default"><i class="fa fa-circle fa-fw"
                                                                          style="color: #18bc9c; font-size: 18px;"></i></a>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="switch-style" data-toggle="tooltip" data-placement="top" title="Green"
                       data-color="#5cb85c" data-style="style_green"><i class="fa fa-circle fa-fw"
                                                                        style="color: #5cb85c; font-size: 18px;"></i>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="switch-style" data-toggle="tooltip" data-placement="top" title="Red"
                       data-color="#e96363" data-style="style_red"><i class="fa fa-circle fa-fw"
                                                                      style="color: #e96363; font-size: 18px;"></i></a>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="switch-style" data-toggle="tooltip" data-placement="top" title="Blue"
                       data-color="#23bab5" data-style="style_blue"><i class="fa fa-circle fa-fw"
                                                                       style="color: #23bab5; font-size: 18px;"></i></a>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="switch-style" data-toggle="tooltip" data-placement="top" title="Orange"
                       data-color="#e97436" data-style="style_orange"><i class="fa fa-circle fa-fw"
                                                                         style="color: #e97436; font-size: 18px;"></i></a>
                </div>
            </div>
        </div>
        <!-- /.dropdown-messages -->
    </li>
</ul>

<!-- MEGA MENU -->
<ul class="nav navbar-top-links navbar-left mega-menu hidden-xs hidden-sm">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-list-ul fa-fw"></i> <strong>Mega Menu</strong> <span
                class="badge badge-notification badge-danger animated pulse">new</span>
        </a>

        <div class="dropdown-menu mega-menu animated flipInY">
            <div class="row">
                <div class="col-sm-4 border right">
                    <h3><i class="fa fa-list-ol fa fw"></i> Today's Tasks</h3>

                    <div>
                        <p>
                            <strong>Deadline on ACME</strong>
                            <span class="pull-right text-muted">40%</span>
                        </p>

                        <div class="progress progress-bar-mini progress-striped active">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% (success)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <strong>Moving to new Headquarters</strong>
                            <span class="pull-right text-muted">20%</span>
                        </p>

                        <div class="progress progress-bar-mini progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20%</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <strong>Writing the ACME code</strong>
                            <span class="pull-right text-muted">60%</span>
                        </p>

                        <div class="progress progress-bar-mini progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% (warning)</span>
                            </div>
                        </div>
                    </div>
                    <h4>Lorem ipsum</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Nulla facilisi.
                        Phasellus in rutrum felis. Phasellus in rutrum felis.</p>
                </div>
                <div class="col-sm-4 border right">
                    <h3><i class="fa fa-list-alt fa fw"></i> News</h3>

                    <div class="has-nice-scroll" style="overflow-y: hidden; outline: none; height: 263px; z-index:3;">
                        <h4>Aliquam</h4>

                        <p>Aliquam erat volutpat. Nulla nec justo dui. Aeneanoi atet accumsan egestas tortor at lacinia.
                            Pellentesque netus habitant morbi tristique senectus et netus etor egestasio malesuada
                            famesac turpis egestas. </p>
                        <h4>Lorem ipsum</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. AmetCurabitur nec
                            lorem alty amet massalit fermentum massa eti. Nulla facilisi. Phasellus in rutrum
                            felis. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h3><i class="fa fa-envelope fa fw"></i> New Messages</h3>

                    <div>
                        <img src="../assets/images/people/25x25/1.jpg" alt=""
                             data-src="../assets/images/people/25x25/1.jpg"
                             data-src-retina="../assets/images/people/x2/1x2.jpg" class="img-responsive img-circle">
                        <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em class="label label-info">Yesterday</em>
                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>

                    <div>
                        <img src="../assets/images/people/25x25/1.jpg" alt=""
                             data-src="../assets/images/people/25x25/1.jpg"
                             data-src-retina="../assets/images/people/x2/1x2.jpg" class="img-responsive img-circle">
                        <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em class="label label-info">Yesterday</em>
                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>

                    <div>
                        <img src="../assets/images/people/25x25/1.jpg" alt=""
                             data-src="../assets/images/people/25x25/1.jpg"
                             data-src-retina="../assets/images/people/x2/1x2.jpg" class="img-responsive img-circle">
                        <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em class="label label-info">Yesterday</em>
                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>

                    <span class="separator top btn btn-outline btn-info btn-block text-uppercase">View Messages</span>
                </div>
            </div>
        </div>
    </li>
</ul>
<!-- // MEGA MENU -->

<ul class="nav navbar-top-links navbar-right hidden-xs">

<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-envelope fa-fw"></i> <span
            class="badge badge-notification badge-warning animated fadeIn">7</span>
    </a>
    <ul class="dropdown-menu dropdown-messages animated flipInY">
        <li>
            <a href="#">
                <div>
                    <img src="../assets/images/people/25x25/1.jpg" alt="" data-src="../assets/images/people/25x25/1.jpg"
                         data-src-retina="../assets/images/people/x2/1x2.jpg" class="img-responsive img-circle">
                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em class="label label-info">Yesterday</em>
                                    </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <img src="../assets/images/people/25x25/1.jpg" alt="" data-src="../assets/images/people/25x25/1.jpg"
                         data-src-retina="../assets/images/people/x2/1x2.jpg" class="img-responsive img-circle">
                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em class="label label-info">Yesterday</em>
                                    </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <img src="../assets/images/people/25x25/1.jpg" alt="" data-src="../assets/images/people/25x25/1.jpg"
                         data-src-retina="../assets/images/people/x2/1x2.jpg" class="img-responsive img-circle">
                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em class="label label-info">Yesterday</em>
                                    </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="#">
                <strong>Read All Messages</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-messages -->
</li>
<!-- /.dropdown -->


<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-tasks fa-fw"></i> <span class="badge badge-notification badge-danger animated fadeIn">3</span>
    </a>
    <ul class="dropdown-menu dropdown-tasks animated fadeInUp">
        <li class="dropdown-header text-center">You have 3 Tasks alerts</li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Deadline on ACME</strong>
                        <span class="pull-right text-muted">40%</span>
                    </p>

                    <div class="progress progress-bar-mini progress-striped active">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
                             aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% (success)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Moving to new Headquarters</strong>
                        <span class="pull-right text-muted">20%</span>
                    </p>

                    <div class="progress progress-bar-mini progress-striped active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20%</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Writing the ACME code</strong>
                        <span class="pull-right text-muted">60%</span>
                    </p>

                    <div class="progress progress-bar-mini progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% (warning)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li class="dropdown-footer">
            <a class="text-center" href="#">
                <strong>See All Tasks</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-tasks -->
</li>
<!-- /.dropdown -->

<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-bell fa-fw"></i> <span class="badge badge-notification badge-info animated fadeIn">3</span>
    </a>
    <ul class="dropdown-menu dropdown-alerts animated fadeInUp">
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-comment fa-fw"></i> New Comment
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                    <span class="pull-right text-muted small">12 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-tasks fa-fw"></i> New Task
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
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
    <!-- /.dropdown-alerts -->
</li>
<!-- /.dropdown -->


<li class="dropdown">
    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
        Jonathan Doe
        <img src="../assets/images/people/25x25/1.jpg" alt="" data-src="../assets/images/people/25x25/1.jpg"
             data-src-retina="../assets/images/people/x2/1x2.jpg" class="img-responsive img-circle user-img">
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user animated fadeInUp">
        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
<li class="active"><a href="#" class="animated fadeIn trigger-sidebar"><i class="fa fa-comments"></i> </a></li>
</ul>
<!-- /.navbar-top-links -->

</nav>

<?php include 'menu-side.php';?>

</div>


</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bower_components/jquery/dist/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>


<script src="assets/js/plugins/jquery-cookie/jquery.cookie.js"></script>

<script type="text/javascript">
    var primaryColor = '#303641',
        dangerColor = '#F22613',
        successColor = '#2ecc71',
        warningColor = '#F5AB35',
        infoColor = '#3498db',
        inverseColor = '#111',
        cursorColor = ( $.cookie('cursorColor') ) ? $.cookie('cursorColor') : '#333';

    $.cookie('dev', false);

    // Setting URL
    var url = '../assets/',
        time = '1399829564';

    var themeStyle = ( $.cookie('themeStyle') ) ? $.cookie('themeStyle') : 'style_default';

    if ($.cookie('dev') == 'true') {
        $("#style_color").attr('href', url + 'less/' + themeStyle + '.less?' + time);
    } else {
        $("#style_color").attr('href', url + 'css/' + themeStyle + '.css');
    }
</script>


<!-- jQuery easing | Script -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


<!-- Bootstrap Sitch | Script -->
<script src="assets/js/plugins/bootstrap-switch/bootstrap-switch.js"></script>
<!-- Sparkline | Script -->
<script src="assets/js/plugins/sparklines/jquery.sparkline.js"></script>
<!-- Easy Pie Charts | Script -->
<script src="assets/js/plugins/easy-pie/jquery.easypiechart.min.js"></script>
<!-- Date Range Picker | Script -->
<script src="assets/js/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>


<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/holder.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/plugins/flot/jquery.flot.js"></script>
<script src="assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/plugins/flot/jquery.flot.resize.js"></script>

<script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>


<!-- Init Scripts - Include with every page -->
<script src="assets/js/init.js"></script>


<!-- Page-Level Demo Scripts - Dashboard && Calendar - Use for reference -->
<!-- // <script src="../assets/js/jquery-ui.custom.min.js"></script> -->
<!-- // <script src='../assets/js/plugins/calendar/lib/moment.min.js'></script> -->
<script src="assets/js/plugins/calendar/fullcalendar.js"></script>
<script src="assets/js/demo/calendar.js"></script>


<!-- Page-Level Demo Scripts - Maps - Use for reference -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places"></script>
<script type="text/javascript">
    var load = true;
</script>
<script src="assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/demo/maps.js"></script>
<script src="assets/js/demo/dashboard.js"></script>


</html>





