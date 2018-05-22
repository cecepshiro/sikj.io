<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Detail Pengajuan</title>
    @extends('layouts.stylecss')  
    <script src="{{ asset('/backend/js/jquery.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    
                    <li class="active">
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
                                FORM DETAIL PENGAJUAN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    
                                        <i class="material-icons">more_vert</i>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <form method="POST" action="{{ route('detailpengajuan.store') }}"  name="add_detail" id="add_detail" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>ID Detail Pengajuan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="id_detail_pengajuan" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>No Pengajuan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <?php
                                                $kode=Auth::user()->id;
                                                $temp=DB::table('data_perawat')->select('id_perawat')->where('id', $kode)->value('id_perawat');
                                            ?>
                                                <input type="text" name="no_pengajuan" class="form-control" value="{{ $cari }}" readonly>
                                                <input type="hidden" name="id_perawat" class="form-control" value="{{ $temp }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>BHP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="table-responsive"> 
                                        <div class="form-group">
                                             
                                                <table class="table" id="dynamic_field">  
                                                    <tr>  
                                                        <td><input type="text" name="bhp[]" placeholder="Masukkan alat BHP" class="form-control" /></td>  
                                                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                                    </tr>  
                                                </table>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="status" class="form-control" placeholder="status">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4">
                                        <input type="submit" id="submit" name="submit" class="btn btn-primary waves-effect" value="SIMPAN">
                                        <button type="button" class="btn btn-danger waves-effect">BATAL</button>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--DateTime Picker -->
        
            <!--#END# DateTime Picker -->
        </div>
    </section>
     @extends('layouts.stylejs')

     <script type="text/javascript">
        $(document).ready(function(){      
        var postURL = "<?php echo url('addmore'); ?>";
        var i=1;  

        $('#add').click(function(){  
            i++;  
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="bhp[]" placeholder="Masukkan alat BHP" class="form-control" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
        });  


        $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
        });  


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#submit').click(function(){            
            $.ajax({  
                    url:postURL,  
                    method:"POST",  
                    data:$('#add_detail').serialize(),
                    type:'json',
                    success:function(data)  
                    {
                        if(data.error){
                            printErrorMsg(data.error);
                        }else{
                            i=1;
                            $('.dynamic-added').remove();
                            $('#add_detail')[0].reset();
                            $(".print-success-msg").find("ul").html('');
                            $(".print-success-msg").css('display','block');
                            $(".print-error-msg").css('display','none');
                            $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                        }
                    }  
            });  
        });
        function printErrorMsg (msg) {

            $(".print-error-msg").find("ul").html('');

            $(".print-error-msg").css('display','block');

            $(".print-success-msg").css('display','none');

            $.each( msg, function( key, value ) {

            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

            });

            }

         });  
    </script>
</body>
</html>