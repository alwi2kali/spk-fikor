@extends('layouts.admin.masteruser')
@section('dashboard')
<div class="content">	
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h5>Data Subkriteria Kesejahteraan Sosial</h4>
                </div>
                <div class="card-header">
                    <a href="{{ route('input.skripkesejahteraan') }}" class="badge badge-primary">Menambahkan (+)</a>
                </div>

                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('message') }}
                    </div>
                </div>
                 @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-data-table" class="table table-striped table-hover table-bordered table-lg" style="width:100%">
                    {{-- <table class="table table-striped table-hover table-bordered table-lg"> --}}
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Skrips</th>
                                    <th>Nama Kriteria</th>
                                    <th>Nama Skrips</th>
                                    <th>Nilai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                 @foreach($skrips as $dataJoin)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{  $dataJoin->kd_skrips }}</td>
                                    <td>{{ $dataJoin->nm_kriteria }}</td>
                                    <th>{{ $dataJoin->nm_skrips }}</th>
                                    <th>{{ $dataJoin->nilai }}</th>
                                    <td>
                                        <a href="" class="badge badge-success">Edit</a> |
                                        <a href="#" class="badge badge-danger delete" data-id="">
                                            <form action="" id="" method="POST">
                                            @csrf
                                            @method('delete')
                                            </form>
                                            hapus
                                        </a>
                                    </td>
                                </tr>

                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('hapus')
<script>
    $('.delete').click(function(e){
     id = e.target.dataset.id;
          swal({
          title: "Anda Yakin",
          text: "Ingin menghapus data ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willDelete) => {
          if (willDelete) {
              swal("Data berhasil di hapus", {
              icon: "success",
              });
              $(`#delete${id}`).submit();
          }
          });
  
    });
  </script>
@endsection