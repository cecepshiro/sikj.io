<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Pasien</title>
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

                    <!-- Tasks -->

                    <!-- #END# Tasks -->
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
                    <li class="active">
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
                    <li class="">
                        @if(Auth::user()->hak_akses==0)
                        <a href="{{ route('statuspegawai.index') }}" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Status Pegawai</span>
                        </a>
                        @endif
                    </li>
                    <li class="">
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
                    &copy; 2018 <a href="javascript:void(0);">Sistem Informasi Kateterisasi Jantung</a>.
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
            <div class="block-header">
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header">

                            <h2>
                                FORM PASIEN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">

                                        <i class="material-icons">more_vert</i>

                                </li>
                            </ul>
                        </div>
                        <div class="body">
						<form method="POST" action="{{ route('pasien.update', ['pasien'=> $data['no_pasien']]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nomor Pasien</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" name="no_pasien" value="{{ $data->no_pasien }}" readonly placeholder="Enter your name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Pasien</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" name="nama_pasien"  value="{{ $data->nama_pasien }}" placeholder="Enter your name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Jenis Pasien</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                   <select name="id_jenis_pasien" class="form-control show-tick">
                                      <option value="">-- Please select --</option>
                                      @foreach($items as $item)
                                      @if($item->id_jenis_pasien == $data->id_jenis_pasien)
                                        <option value="{{ $item->id_jenis_pasien }}" selected>{{ $item->jenis_pasien }}</option>
                                      @endif
                                        <option value="{{ $item->id_jenis_pasien }}">{{ $item->jenis_pasien }}</option>
                                      @endforeach
                                    </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tgl_lahir"  value="{{ $data->tgl_lahir }}" class="form-control" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Tempat Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tempat_lahir" id="email_address_2"  value="{{ $data->tempat_lahir }}" class="form-control" placeholder="Enter your name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Umur</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="umur" id="email_address_2"  value="{{ $data->umur }}" class="form-control" placeholder="Enter your name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                 <div class="demo-radio-button">
                                @if($data->jenis_kelamin == 'Laki-Laki')
                                  <input name="jenis_kelamin" type="radio" value="Laki-Laki" id="radio_1"  checked/>
                                  <label for="radio_1">Laki-Laki</label>
                                  <input name="jenis_kelamin" type="radio" value="Perempuan" id="radio_2" />
                                  <label for="radio_2">Perempuan</label>
                                  <input name="group1" type="radio" class="with-gap" id="radio_3" />
                                @elseif($data->jenis_kelamin == 'Perempuan')
                                  <input name="jenis_kelamin" type="radio" value="Laki-Laki" id="radio_1"  />
                                  <label for="radio_1">Laki-Laki</label>
                                  <input name="jenis_kelamin" type="radio" value="Perempuan" id="radio_2" checked/>
                                  <label for="radio_2">Perempuan</label>
                                  <input name="group1" type="radio" class="with-gap" id="radio_3" />
                                @endif


                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                    <textarea rows="4" name="alamat" class="form-control no-resize auto-growth"  placeholder="Please type what you want... And please don't forget the ENTER key press multiple times :)">{{ $data->alamat }}</textarea>
                                </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>No Telp</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <?php
                                              $kode = Auth::user()->id;
                                              $nip = DB::table('data_pegawai')->select('nip')->where('id', $kode)->value('nip');
                                              ?>
                                                <input type="text" name="no_telp" id="email_address_2"  value="{{ $data->no_telp }}" class="form-control" placeholder="Enter your name">
												<input type="hidden" name="nip" id="email_address_2" class="form-control" placeholder="ID Pendaftar" value="{{ $data->nip }}" readonly>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4">
                                       <input type="submit" class="btn btn-primary waves-effect" value="SIMPAN">
                                       <a href="{{ route('pasien.index') }}" type="button" class="btn btn-danger waves-effect">BATAL</button></a>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
                </form>
            </div>
            <!--DateTime Picker -->

            <!--#END# DateTime Picker -->
        </div>
    </section>

    @extends('layouts.stylejs')
</body>
</html>
