@extends('admin_layouts.admin_master')
@section('admin_content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Upload Foto Admin</h6>
            </div>
            <div class="card-body">
                <form action="/admin/profile/{{ Auth::user()->id }}/uploadfoto" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Pilih Foto (jpg/.jpeg/.png)</label>
                        <input type="file" class="form-control-file" name="admin_foto[]" id="exampleFormControlFile1" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Foto</button>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

@endsection