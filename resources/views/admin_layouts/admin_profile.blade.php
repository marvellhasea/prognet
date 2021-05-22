@extends('admin_layouts.admin_master')
@section('admin_content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- Begin Page Content -->
        <div class="container-fluid">
  
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Notifikasi</h6>
                </div>
                <!-- Border Bottom Utilities -->
                <div class="col-lg-12">

                    <div class="card mb-4 py-3 border-bottom-primary">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="table">
                                </div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="profile-main text-center">
                                    
                                            @if (Auth::user()->profile_image != null)
                                            {{-- <div class="image">
                                                <img src="{{ asset('pengguna/html/images/shop/profile-02.jpg') }}" class="img-circle main" width="relative" height="170px" alt="Avatar">
                                            </div> --}}

                                            <div class="image">
                                                <img src="{{ Auth::user()->image }}" class="main" width="170px" height="170px" alt="Avatar">
                                            </div>
                                                
                                            @endif

                                            {{-- <img src="{{ asset('pengguna/html/images/shop/profile-02.jpg') }}" class="img-circle main" width="relative" height="170px" alt="Avatar"> --}}

                                            <ul class="steps row" ></ul>
        
                                            <!-- Data -->
                                            <div class="form-group p-2">
                                                <table class="table table-striped table-bordered " align="center">
                                                    <tbody>
                                                        <tr>
                                                            <th>Nama Admin</th>
                                                            <td>{{ Auth::user()->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>{{ Auth::user()->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone Number</th>
                                                            <td>{{ Auth::user()->phone }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- <div class="form-group">
                                                <table class="table table-striped table-bordered " align="center">
                                                    <tbody>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <td class="text-uppercase">{{ Auth::user()->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>{{ Auth::user()->email }}</td>
                                                        </tr>

                                                    </tbody>
                                                  </table>
                                            </div> --}}
                                            <!-- / Tombol Edit Foto -->
                                            @if (Auth::user()->profile_image == null)
                                            <div class="col-lg-12">
                                                <a href="/admin/profile/{{ Auth::user()->id }}/edit_foto" class="btn btn-primary btn-user btn-block">
                                                    Upload Foto Profile
                                                </a>
                                            </div>
                                                
                                            @endif
                                            <!-- /END: Tombol Edit Foto -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
  
        </div>
        <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

@endsection


