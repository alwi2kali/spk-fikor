@extends('layouts.admin.masteruser')
@section('dashboard')
<div class="content">
    <div class="row">
    <div class="col-lg-12">
        <h5><span class="mt-2 d-block">Masukkan Data Kriteria Kesejahteraan Sosial </span></h5><br>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <a href="{{ route('nilai.alternatifkesejahteraan') }}" class="badge badge-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('store.kriteriakesejahteraan') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                
                </form>
            </div>
        </div>
    </div>
    </div> 
</div>
@endsection