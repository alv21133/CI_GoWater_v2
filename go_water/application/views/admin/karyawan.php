

<?php

?>

<!doctype html>

 <html class="no-js" lang="">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Member</title>
    <meta name="description" content="sasori admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/judul.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/judul.png"> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/pe-icon-7-filled.css">
    <link href="<?php echo base_url() ?>assets/weather/css1/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/calendar/fullcalendar.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/style.css">
    <link href="<?php echo base_url() ?>assets/css1/charts/chartist.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url() ?>assets/css1/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart { 
            min-height: 335px; 
        }
        #flotPie1  {
            height: 150px;
        } 
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        } 

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>

</head>
<body style="background-color:#f0f0f8;">


    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="karyawan.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Go Water Data</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Member</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="data_member.php">Data Member</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="tambah_akun_member.php">Tambah Akun</a></li>
                            <li><i class="fa fa-pencil"></i><a href="konfirmasi.php">Konfirmasi Member</a></li>                
                            <li><i class="fa fa-flash"></i><a href="update_pemakaian.php">Pemakaian</a></li>                
                          
                           
                        </ul>
                    </li>

                    <li class="menu-title">Data Keuangan</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Keuangan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="keuangan.php">Keuangan</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="transaksi.php">Transaksi</a></li>
                            <li><i class="fa fa-dollar "></i><a href="kerusakan.php">Kerusakan</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Agenda</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Kegiatan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Agenda.php">Agenda</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="#">Planing</a></li>
                        </ul>
                    </li>
                  
                </div>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->



    <!-- Right Panel --> 
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">  
            <div class="top-left">
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="./"><img style="width: 70px; height:45px" src="<?php echo base_url() ?>assets/img/logo_admin.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url() ?>assets/images/logo2.png" alt="Logo"></a> 
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
                </div> 
            </div>
            <div class="top-right"> 
                <div class="header-menu"> 
                  <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>assets/img/bg-img/client-1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
                            <a class="nav-link" onclick="<?php session_unset()?>" href="../login/"  ><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div> 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->


        <div class="content pb-0">

            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text">Rp <span class="count">23569</span></div>
                                        <div class="stat-heading">Pendapatan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7f-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">Rp <span class="count">34350</span></div>
                                        <div class="stat-heading">Pengeluaran</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7f-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count">68</span></div>
                                        <div class="stat-heading">Agenda</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">                                         
                                        
                                      
                                        <div class="stat-text"><span class="count"><?php $hasil['jumlah'];  ?></span></div> 
                                                                                         
                                        <div class="stat-heading">Anggota</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Widgets End -->


            <!--  Traffic  -->
            <div class="row">
                <div class="loader"></div>
                  <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                               
                                <h4 class="mb-7"style="text-align:center" >Status Distribusi Air</h4>
                                <hr>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                        </div>
                    </div>          


                            <div class="col-lg-4">
                                <div class="card-body">
                                      <div class="col-lg-12">
                                            <div class="card weather-box">
                                                <!-- weather widget start --><div id="m-booked-weather-bl250-94078"> <div class="booked-wzs-250-src175 weather-customize" style="background-color:#cfcfcf;width:306px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>31</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>31&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>26&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Yogyakarta</div> <div class="booked-wzs-250-175-date">Thursday, 24 January</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/jakarta-18977"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Fri</td> <td>Sat</td> <td>Sun</td> <td>Mon</td> <td>Tue</td> <td>Wed</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>28&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> <td class="week-day-val"><span class="plus">+</span>28&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>27&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-94078'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=18977&type=3&scode=124&ltid=3458&domid=w209&anc_id=57317&cmetric=1&wlangID=1&color=cfcfcf&wwidth=306&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
                                            </div><!-- /.card -->
                                </div> <!-- /.card-body -->
                            </div>
                        </div> <!-- /.row --> 
                        
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->


            <div hidden class="row">

                    <div class="col-xl-4">
                        <div class="row"> 
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0"> 
                                    <div class="card-body">
                                        <div class="chart-container ov-h">
                                            <div id="flotPie1" class="float-chart"></div>
                                        </div>
                                    </div> 
                                </div><!-- /.card -->
                            </div>

                            <div class="col-lg-6 col-xl-12">
                                <div class="card bg-flat-color-3  ">
                                    <div class="card-body">
                                        <h4 class="card-title m-0  white-color ">August 2018</h4>
                                    </div>
                                     <div class="card-body">
                                         <div id="flotLine5" class="flot-line"></div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-md-4 -->
                </div> 
            </div> <!-- /.order -->



        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class=" card" >
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; 2018 
                        </div>
                        <div class="col-sm-6 text-right">
                            Designed by <a href="#">Sasori</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->


    <script src="<?php echo base_url() ?>assets/js1/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery-2.2.4.min.js"></script>
    
    <script src="<?php echo base_url() ?>assets/js1/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/main.js"></script>
    <!--Chartist Chart-->
    <script src="<?php echo base_url() ?>assets/js1/lib/chartist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/chartist/chartist-plugin-legend.js"></script> 
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url() ?>assets/weather/js1/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/weather/js1/weather-init.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/moment/moment.js"></script>
    <script src="<?php echo base_url() ?>assets/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/calendar/fullcalendar-init.js"></script>
     <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/excanvas.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/curvedLines.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/flot-chart/flot-chart-init.js"></script>    <!--  Chart js -->
    <script src="<?php echo base_url() ?>assets/js1/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js1/lib/chart-js/chartjs-init.js"></script>    <script>
       

    




<div id="container">
  
 
  
</div>



</body>
</html>
