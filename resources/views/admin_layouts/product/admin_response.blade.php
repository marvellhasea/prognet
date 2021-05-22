@extends('admin_layouts.admin_master')
@section('admin_content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Tambah Produk -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Response</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="/produk/upload/respose/{{ $id }}">
                    @csrf
                    <fieldset disabled>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{ Auth::user()->name }}">
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Respon</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" id="content" name="content" placeholder="Respon">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 float-right">Publish Response</button>
                </form>
            </div>
        </div>
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <fieldset disabled>
                                <div class="form-group">
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ Auth::user()->name }}">
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Respon</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Respon">
                            </div>
                            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary mr-2 float-right">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

@endsection