﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Data Status | Hospital App</title>
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
                <a class="navbar-brand" href="{{ url('/') }}">APLIKASI KATETERISASI JANTUNG</a>
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
                   <img src="{{ asset('/backend/images/user.png') }}" width="48" height="48" alt="User" />
              </div>
              <div class="info-container">
                  <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                  <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li>

                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  <i class="material-icons">input</i>Sign Out
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>


                            </li>
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
                        <a href="{{ url('/') }}">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pasien.index') }}" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Data Pasien</span>
                        </a>

                    </li>
                    <li class="">
                        <a href="{{ route('rekmed.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Rekam Medis</span>
                        </a>
                    </li>
                    <li class="">
                        @if(Auth::user()->hak_akses==2 || Auth::user()->hak_akses==0)
                        <a href="{{ route('dokter.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Dokter</span>
                        </a>
                        @endif                        
                    </li>
                    <li class="">
                        @if(Auth::user()->hak_akses==3 || Auth::user()->hak_akses==0)
                        <a href="{{ route('perawat.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Perawat</span>
                        </a>
                        @endif
                    </li>
                    <li class="">
                        @if(Auth::user()->hak_akses==0)
                        <a href="{{ route('pegawai.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Pegawai</span>
                        </a>
                        @endif
                    </li>
                    
                    <li class="">
                        @if(Auth::user()->hak_akses==2 || Auth::user()->hak_akses==1 || Auth::user()->hak_akses==0)
                        <a href="{{ route('masterpengajuan.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data BHP</span>
                        </a>
                        @endif
                    </li>
                   
                    <li class="">
                        @if(Auth::user()->hak_akses==0)
                        <a href="{{ route('jenis_pasien.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Jenis Pasien</span>
                        </a>
                        @endif
                    </li>
                    <li class="active">
                        @if(Auth::user()->hak_akses==0)
                        <a href="{{ route('statuspegawai.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Status Pegawai</span>
                        </a>
                        @endif
                    </li>
                    <li class="active">
                        @if(Auth::user()->hak_akses==0)
                        <a href="{{ route('statuspegawai.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Status Pegawai</span>
                        </a>
                        @endif
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA STATUS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                        <i class="material-icons">more_vert</i>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            @if(Auth::user()->hak_akses==0)
                            <div>
                                <a href="{{ route('statuspegawai.create') }}" class="btn bg-green btn-md waves-effect">
                                <i class="material-icons"></i>Tambah Status Pegawai</a>
                            </div>
                            <br>
                            @endif
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>ID Status</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>ID Status</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse($data as $d)
                                        <tr>
                                            <td>{{ $d->id_status }}</td>
                                            <td>{{ $d->status }}</td>
                                            <td>{{ $d->keterangan }}</td>
                                            <form action="{{ route('statuspegawai.destroy', ['statuspegawai'=>$d->id_status]) }}" method="post">
                              							<div class="form-group">
                                            <td>
                              							<a href="{{ route('statuspegawai.edit', ['statuspegawai'=>$d->id_status]) }}" class="btn bg-orange btn-xs waves-effect">
                                              <i class="material-icons">mode_edit</i>
                              							</a>
                              							<input type="hidden" name="_method" value="DELETE">
                              							<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs bg-red waves-effect"><i class="material-icons">delete_forever</i></button>
                                            </form>
                                          </td>
                                        </tr>
                                  @empty
                                  <tr>
                                      <td colspan="10">Data Kosong</td>
                                  </tr>
                                  @endforelse
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
