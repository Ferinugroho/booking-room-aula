<?php
session_start();
include ('config/connection.php');
$page=$_GET['p'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PUSRI</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
      <link href="asset/css/style.css" rel="stylesheet">

              <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
        <link rel="stylesheet" href="asset/css/eventCalendar.css">

        <!-- Theme CSS file: it makes eventCalendar nicer -->
        <link rel="stylesheet" href="asset/css/eventCalendar_theme_responsive.css">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/pusri.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="home.php" class="navbar-brand"> 
                 <b><img src="asset/img/LOGOPUSRI.png"></b>
                </a>

             <!-- Nav Barnya -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Halo,  <i class="fa fa-user"></i>&nbsp;<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
                        <li><a href="#"><i class="fa fa-lock"></i> Ganti Password</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Sign Out</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">
                        <?
                          echo "".gmdate('H:i',time()+60*60*7)."";
                        ?>
                      </h1>
                      <p class="animated fadeInRight">
                      <?php
                        $tgl=date('l, d-m-Y');
                        echo $tgl;
                        ?> 
                       </p>
                    </li>
                   
                    <li role="presentation" <?php if($page == 'home') echo 'class="active"';?>><a href="home.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li role="presentation" <?php if($page == 'agenda') echo 'class="active"';?>>
                    <a href="home.php?p=agenda">
                      <i class="fa fa-calendar"></i> 
                        Agenda
                    </a>
                    </li>
                    <li role="presentation" <?php if($page == 'broadcast') echo 'class="active"';?>><a href="home.php?p=broadcast"><i class="fa fa-bullhorn"></i> Broadcast</a></li>
                    <li role="presentation" <?php if($page == 'pengguna') echo 'class="active"';?>><a href="home.php?p=pengguna"><i class="fa fa-user-plus"></i> Tambah Pengguna</a></li>
                    <li role="presentation" <?php if($page == 'pesan') echo 'class="active"';?>><a href="home.php?p=pesan"><i class="fa fa-envelope"></i> Pesan</a></li>

                </ul>
              </div>
            </div>

          <!-- end: Left Menu -->
 
          <!-- start: Content -->
          <div id="content">
            <div class="col-md-12 padding-0">
              <div class="col-md-12 padding-0">
                <div class="col-md-12 padding-0">
                  <div class="panel box-shadow-none content-header">
                      <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Welcome</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Sistem Aplikasi Surat Undangan Rapat
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>


   
            <div class="col-xs-6 col-md-10" id="left-content">
              <?php
        if($page == ''):
          include('index.php');
        elseif($page == 'agenda'):
          include('agenda.php');
        elseif($page == 'broadcast'):
          include('broadcast.php');
        elseif($page == 'agenda'):
          include('agenda.php');
        elseif($page == 'pengguna'):
          include('pengguna.php');
        elseif($page == 'pesan'):
          include('pesan.php');
          else : include ('dashboard.php');
        endif;
                ?>
            </div>
          </div>

          <!-- end: Content -->

 
  

    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    
    
    <!-- plugins -->
    <script src="asset/js/jquery.eventCalendar.js" type="text/javascript"></script>
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/fullcalendar.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/jquery.vmap.min.js"></script>
    <script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="asset/js/plugins/chart.min.js"></script>
    <!-- custom -->
     <script src="asset/js/main.js"></script>
  <!-- end: Javascript -->
  </body>
</html>