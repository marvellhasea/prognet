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
                <div class="card-body">
                    <!-- Tabel Data -->
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            {{-- <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Kurir</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead> --}}
                            <tbody>
                                @foreach ($data_adminnotofikassi as $item)

                                @php
                                $data = json_decode($item->data);
                                @endphp

                                <tr>
                                    {{-- <td>{{ $no+1 }}</td>
                                    <td>{{ $kurir->courier }}</td>
                                    <td class="text-center">
                                        <a href="/admin/kurir/{{ $kurir->id }}/edit" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a>
                                            <form action="/admin/kurir/{{ $kurir->id }}/delete" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-circle btn-sm" onclick="return confirm ('Yakin mau dihapus?') ">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form> 
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td> --}}
                                    <th><i class="fas fa-bell fa-fw"></i></i></th>
                                    <td>{{ $data->nama }} {{ $data->massage}}</td>
                                    <td>{{ date("d F Y", strtotime($item->created_at)) }}</td>
                                    <td class="text-center">
                                        <!-- info btn -->
                                        <a href="/admin/detail-transaksi/{{ $data->id }}/view" onclick="read('{{$item->id}}')" class=" btn btn-primary btn-sm">
                                            <i class="fas fa-book-reader"></i>
                                        </a>
                                    </td>
                                    {{-- onclick="read('{{$item->id}}')" --}}

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
  
        </div>
        <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

@endsection