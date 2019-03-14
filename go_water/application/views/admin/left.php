<body style="background-color:#f0f0f8;">


    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url().'l_admin' ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Go Water Data</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Member</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="<?php echo base_url().'Data_customer' ?>">Data Member</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url().'Tambah_akun'?>">Tambah Akun</a></li>
                            <li><i class="fa fa-pencil"></i><a href="<?php echo base_url().'konfirmasi'?>">Konfirmasi Member</a></li>                
                            <li><i class="fa fa-flash"></i><a href="<?php echo base_url().'pakai'?>">Pemakaian</a></li>                
                          
                           
                        </ul>
                    </li>

                    <li class="menu-title">Data Keuangan</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Keuangan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo base_url().'keuangan'?>">Keuangan</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="<?php echo base_url().'transaksi'?>">Transaksi</a></li>
                            <li><i class="fa fa-dollar "></i><a href="<?php echo base_url().'kerusakan'?>">Kerusakan</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Agenda</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Kegiatan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url().'agenda'?>">Agenda</a></li>
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
                            <a class="nav-link" href="<?php echo base_url().'l_admin/log_out/' ?>"  ><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div> 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->
