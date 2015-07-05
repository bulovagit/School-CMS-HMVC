<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url('themes/smaihbatam/favicon.ico'); ?>" type="image/png">

  <title><?php echo $template['title']; ?></title>


  <link href="<?php echo base_url('themes/admin/assets/css/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('themes/admin/assets/css/style-responsive.css'); ?>" rel="stylesheet">
  <!--Plugin css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('themes/admin/assets/js/gritter/css/jquery.gritter.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('themes/admin/assets/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('themes/admin/assets/js/ios-switch/switchery.css'); ?>" />

  <!-- Data Table -->
  <link href="<?php echo base_url('themes/admin/assets/js/advanced-datatable/css/demo_page.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('themes/admin/assets/js/advanced-datatable/css/demo_table.css'); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('themes/admin/assets/js/data-tables/DT_bootstrap.css'); ?>" />
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
    var BASEURL         = "<?php echo base_url(); ?>";
    var notifInsert     = "<?php echo $this->session->flashdata('sukses_insert'); ?>";
    var notifUpdate     = "<?php echo $this->session->flashdata('sukses_update'); ?>";
    var notifDelete     = "<?php echo $this->session->flashdata('sukses_delete'); ?>";
    var notifLogin      = "<?php echo $this->session->flashdata('suksesLogin'); ?>";
  </script>
</head>

<body class="sticky-header">
<?php 
    $mailgravatar       = $this->session->userdata['sessionData']['userEmail'];
    $gravatar_profile   = $this->gravatar->get_profile_data($mailgravatar);
    $getGravatar        = $this->gravatar->get($mailgravatar);
    
    $avatar             = "";
    if(isset($gravatar_profile['id'])){
        $avatar         = $gravatar_profile['thumbnailUrl'];
    }else{

        $avatar         = $getGravatar;
    }
?>
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
             <a href="./"><h4>SMA IH BATAM</h4></a>
        </div>

        <div class="logo-icon text-center">
            <a href="./"><img src="<?php echo base_url('themes/smaihbatam/logo.png');?>" style="width:100%;height:100%;" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="<?php echo $avatar; ?>" class="media-object">
                    <div class="media-body">
                        <h4><a href="#"><?php echo ucfirst($session['userName']);?></a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="javascript:;" onclick="window.location='<?php echo base_url('auth/logout'); ?>'"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <?php
                include 'menu.php';
            ?>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        <!-- <form class="searchform" action="index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form> -->
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
               <!--  <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 8 pending task</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Database update</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="">40%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Dashboard done</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="">90%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Web Development</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                            <span class="">66% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Mobile App</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="">33% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Issues fixed</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                            <span class="">80% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new"><a href="">See All Pending Task</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 5 Mails </h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li class="new"><a href="">Read All Mails</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #1 overloaded.  </span>
                                    <em class="small">34 mins</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #3 overloaded.  </span>
                                    <em class="small">1 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #5 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #31 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new"><a href="">See All Notifications</a></li>
                        </ul>
                    </div>
                </li> -->
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $avatar; ?>" alt="" />
                        <?php echo ucfirst($session['userName']);?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                        <li><a href="<?php echo base_url('auth/logout'); ?>" onclick="return confirm('Hello <?php echo ucfirst($this->session->userdata['sessionData']['userName']); ?>, Apakah anda yakin akan keluar dari sistem? ')"><i class="fa fa-sign-out"></i> Keluar</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="images/photos/user-avatar.png" alt="" />
                        John Doe
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                        <li><a href="javascript:;" onclick="window.location='<?php echo base_url('auth/logout'); ?>'"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                    </ul>
                </li> -->

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                <?php echo $pagedesc; ?>
            </h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="col-md-12" style="margin-left: -15px;min-width:1128px;">
                <ul class="breadcrumb panel">
                    <?php 
                        if(count($template['breadcrumbs'])>2){ 
                    ?>
                        <li>
                            <?php echo '<a href="'.$template['breadcrumbs'][0]['uri'].'"><i class="fa fa-home"></i>&nbsp;&nbsp;'.$template['breadcrumbs'][0]['name'].'</a>';?>
                        </li>    
                        <li>
                            <?php echo '<a href="'.$template['breadcrumbs'][1]['uri'].'">'.$template['breadcrumbs'][1]['name'].'</a>';?>
                        </li> 
                        <li class="active">
                            <?php echo $template['breadcrumbs'][2]['name'];?>
                        </li>
                    <?php            
                        }else{
                    ?>
                    <li>
                        <?php echo '<a href="'.$template['breadcrumbs'][0]['uri'].'"><i class="fa fa-home"></i>&nbsp;&nbsp;'.$template['breadcrumbs'][0]['name'].'</a>';?>
                    </li>    
                    <li class="active">
                        <?php echo $template['breadcrumbs'][1]['name'];?>
                    </li>
                    <?php            
                        }
                    ?>
                </ul>
            </div>