﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Data Penyakit | Hospital App</title>
      @extends('layouts.stylecss')
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">APLIKASI KATETERISASI JANTUNG</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->



                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="form-examples.html" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>

                    </li>
                    <li class="active">
                        <a href="tables.html" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Sistem Informasi Kateterisasi Jantung</a>.
                </div>

            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PENYAKIT
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                        <i class="material-icons">more_vert</i>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>ID Penyakit</th>
                                            <th>Nama Penyakit</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Penyakit</th>
                                            <th>Nama Penyakit</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>System Architect</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button></td>

                                        </tr>
                                        <tr>
                                             <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>System Architect</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button></td>
                                        </tr>
                                        <tr>
                                             <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>System Architect</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>System Architect</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button></td>
                                        </tr>
                                        <tr>
                                             <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>System Architect</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>System Architect</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button></td>
                                        </tr>
                                        <tr>
                                             <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>System Architect</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

      @extends('layouts.stylejs')
</body>

</html>
