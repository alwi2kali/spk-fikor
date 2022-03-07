@extends('layouts.admin.masteradmin')
@section('dashboard')
<div class="content">


    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>Masukkan Data</h2>
                </div>
                <div class="card">
                    <a href="{{ route('create.mekanisme') }}" class="badge badge-primary">Add</a>
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
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table table-striped table-hover table-bordered table-lg" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                               @php
                                   $no = 1;
                               @endphp
                               @foreach ($mekanisme as $i)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ ('assets/image/' . $i->image) }}" height="80px" width="80px"/></td>
                                    <td>
                                        <a href="{{ route('edit.mekanisme', $i->id) }}" class="badge badge-success">Edit</a> |
                                        <a href="#" class="badge badge-danger delete" data-id="{{ $i->id }}">
                                            <form action="{{ route('destroy.mekanisme', $i->id) }}" id="delete{{ $i->id }}" method="POST">
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