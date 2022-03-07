@extends('layouts.admin.masteruser')
@section('dashboard')
<div class="content">

    <div class="col-lg-12">
        <h5><span class="mt-2 d-block">Masukkan Data Alternatif Kesejahteraan Sosial </span></h5><br>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <a href="{{ route('alternatifkesejahteraan') }}" class="badge badge-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('store.alternatifkesejahteraan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="contoh1" @error('nik')
                        class='text-danger'
                            @enderror>Nik  @error('nik')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Nik" name="nik">
                    </div>
                    <div class="form-group">
                        <label for="contoh1" @error('nm_alternatif')
                        class='text-danger'
                            @enderror>Nama Alternatif @error('nm_alternatif')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Nama Alternatif" name="nm_alternatif">
                    </div>
                    <div class="form-group">
                        <label for="contoh1" @error('alamat')
                        class='text-danger'
                            @enderror>Alamat @error('alamat')
                        | {{ $message }}
                            @enderror</label>
                        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="Alamat" name="alamat">
                    </div>
                    {{-- @foreach($kriteria as $kr)
                    <div class="form-group">
                        <label for="exampleFormControlSelect12">{{ $kr->nm_kriteria }}</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option value="1" disabled selected>...</option>
                       
                            @foreach($kr->skrip as $sk)
                            
                            <option value="">{{ $sk->nm_skrips }}</option> 
  
                            @endforeach
                          
                           
                            
                        </select>
                    </div>
                    @endforeach --}}
                    {{-- <div class="form-group">
                        <label for="exampleFormControlSelect12">{{ $kriteria->nm_kriteria}}</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option>1</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Jenis Dinding</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Jenis Dinding</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Jenis Atap</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Jenis Status Tinggal</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div> --}}

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