@extends('layouts.admin.masteruser')
@section('dashboard')
<div class="content">

    <div class="col-lg-12">
        <h5><span class="mt-2 d-block">Masukkan Data Kriteria Kesejahteraan Sosial </span></h5><br>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <a href="{{ route('skripkesejahteraan') }}" class="badge badge-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('store.skripkesejahteraan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="contoh1" @error('kd_skrips')
                        class='text-danger'
                                @enderror>Kode Skrips @error('kd_skrips')
                        | {{ $message }}
                                 @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kode Sub Kriteria" name="kd_skrips">
                        {{-- <span class="mt-2 d-block">We'll never share your email with anyone else.</span> --}}
                    </div>
                    <div class="form-group">    
                        <label for="contoh1" @error('id_kriteria')
                            class='text-danger'
                        @enderror>Nama Kriteria @error('id_kriteria')
                            | {{ $message }}
                        @enderror</label>
                        <select class="form-control formselect" placeholder ="Nama Kriteria" name="id_kriteria" id="id">
                            <option value="0" disabled selected>Kode Kriteria</option>
                            @foreach ($kriteriaKesejahteraan as $kriteriaKsj)
                            <option value={{ $kriteriaKsj->id }}>
                                {{ ucfirst($kriteriaKsj->kd_kriteria.' '. $kriteriaKsj->nm_kriteria) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contoh1" @error('nm_skrips')
                        class='text-danger'
                            @enderror>Nama Skrips @error('nm_skrips')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Nama Skrips" name="nm_skrips">
                    </div>
                    <div class="form-group">
                        <label for="contoh1" @error('nilai')
                        class='text-danger'
                            @enderror>Nilai @error('nilai')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Nilai" name="nilai">
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