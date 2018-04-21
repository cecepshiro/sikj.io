﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Data Rekam Medis | Hospital App</title>
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
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                  
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
                   <img src="{{ asset('/backend/images/user.png') }}" width="48" height="48" alt="User" />
              </div>
              <div class="info-container">
                  <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                  <div class="email">{{ Auth::user()->email }}</div>
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
                    &copy; 2018 <a href="javascript:void(0);">Sistem Informasi <br>Kateterisasi Jantung</a>.
                </div>
                <div class="version">
                    <b>Developed by: </b> Anak Ayam Studio
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
                <div class="col-lg-20 col-md-20 col-sm-20 col-xs-20">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA REKAM MEDIS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                        <i class="material-icons">more_vert</i>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <div>
                                <a href="{{ route('pasien.index') }}" class="btn bg-blue btn-md waves-effect">
                                <i class="material-icons"></i>Kembali</a>
                                <br>
                                <br>
                            </div>
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No Diagnosa</th>
                                            <th>Nama Pasien</th>
                                            <th>Gejala</th>
                                            <th>Penyakit</th>
                                            <th>Obat</th>
                                            <th>Status</th>
                                            <th>Nama Dokter</th>
                                            <th>Date Check</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No Diagnosa</th>
                                            <th>Nama Pasien</th>
                                            <th>Gejala</th>
                                            <th>Penyakit</th>
                                            <th>Obat</th>
                                            <th>Status</th>
                                            <th>Nama Dokter</th>
                                            <th>Date Check</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse($data as $d)
                                    <?php
                                    $kode = $d->id_diagnosa;
                                    $tmp1 = DB::table('data_diagnosa')->select('no_pasien')->where('id_diagnosa', $kode)->value('no_pasien');
                                    $namapasien = DB::table('data_pasien')->select('nama_pasien')->where('no_pasien', $tmp1)->value('nama_pasien');
                                    $gejala = DB::table('data_diagnosa')->select('gejala')->where('id_diagnosa', $kode)->value('gejala');
                                    $penyakit = DB::table('data_detail_diagnosa')->select('nama_penyakit')->where('id_diagnosa', $kode)->value('nama_penyakit');
                                    $obat = DB::table('data_detail_diagnosa')->select('nama_obat')->where('id_diagnosa', $kode)->value('nama_obat');
                                    $status = DB::table('data_detail_diagnosa')->select('sifat')->where('id_diagnosa', $kode)->value('sifat');
                                    $tmp2 = DB::table('data_diagnosa')->select('nid')->where('id_diagnosa', $kode)->value('nid');
                                    $namadokter = DB::table('data_dokter')->select('nama_dokter')->where('nid', $tmp2)->value('nama_dokter');
                                    ?>
                                        <tr>
                                            <td>{{ $d->id_diagnosa }}</td>
                                            <td>{{ $namapasien }}</td>
                                            <td>{{ $gejala }}</td>
                                            <td>{{ $penyakit }}</td>
                                            <td>{{ $obat }}</td>
                                            <td>{{ $status }}</td>
                                            <td>{{ $namadokter }}</td>
                                            <td>{{ $d->created_at }}</td>
                                            <td><button type="button" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            <button type="button" class="btn bg-orange btn-xs waves-effect"><i class="material-icons">mode_edit</i></button>
                                            <button type="button" class="btn btn-xs bg-light-blue waves-effect"><i class="material-icons">pageview</i> Detail</button>
                                        </td>
                                        </tr>
                                    @empty
                                        <tr>
                              			  <td colspan="10">Data Kosong</td>
                              			</tr>
                                    @endforelse
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