@extends('layouts.admin.masteruser')
@section('dashboard')
<div class="content">

    <div class="col-lg-12">
        <h5><span class="mt-2 d-block">Masukkan Data Kriteria Kesejahteraan Sosial </span></h5><br>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <a href="{{ route('kriteriakesejahteraan') }}" class="badge badge-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('store.kriteriakesejahteraan') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="contoh1" @error('kd_kriteria')
                        class='text-danger'
                            @enderror>Kode Kriteria @error('kd_kriteria')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Kode Kriteria" name="kd_kriteria">
                    </div>
                    <div class="form-group">
                        <label for="contoh1" @error('nm_kriteria')
                        class='text-danger'
                            @enderror>Nama Kriteria @error('nm_kriteria')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Nama Kriteria" name="nm_kriteria">
                    </div>
                    <div class="form-group">
                        <label for="contoh1" @error('bobot')
                        class='text-danger'
                            @enderror>Bobot @error('bobot')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Bobot" name="bobot">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-success btn-default">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-default">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@endsection