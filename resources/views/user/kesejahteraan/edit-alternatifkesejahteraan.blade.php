@extends('layouts.admin.masteruser')
@section('dashboard')
<div class="content">

    <div class="col-lg-12">
        <h5><span class="mt-2 d-block">Masukkan Data Kriteria Kesejahteraan Sosial </span></h5><br>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <a href="{{ route('alternatifkesejahteraan') }}" class="badge badge-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update.alternatifkesejahteraan',$alternatif->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group col-md-6">
                        <label for="contoh1" @error('nik')
                            class='text-danger'
                        @enderror>Nik @error('nik')
                            | {{ $message }}
                        @enderror</label>
                        <input type="text" class="form-control" id="contoh1" name="nik"
                        @if (old('nik'))
                        value="{{ $alternatif->nik }}"
                        @else
                        value="{{ $alternatif->nik }}"
                        @endif
                        placeholder="Nik">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="contoh1" @error('nm_alternatif')
                            class='text-danger'
                        @enderror>Nama Altenatif @error('nm_alternatif')
                            | {{ $message }}
                        @enderror</label>
                        <input type="text" class="form-control" id="contoh1" name="nm_alternatif"
                        @if (old('nm_alternatif'))
                        value="{{ $alternatif->nm_alternatif }}"
                        @else
                        value="{{ $alternatif->nm_alternatif }}"
                        @endif
                        placeholder="Nama Alternatif">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="contoh1" @error('alamat')
                            class='text-danger'
                        @enderror>Alamat  @error('alamat')
                            | {{ $message }}
                        @enderror</label>
                        <input type="text" class="form-control" id="contoh1" name="alamat"
                        @if (old('bobot'))
                        value="{{ $alternatif->alamat }}"
                        @else
                        value="{{ $alternatif->alamat }}"
                        @endif
                        placeholder="Alamat">
                    </div>

                    
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-success btn-default">Update</button>
                        <button type="reset" class="btn btn-danger btn-default">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@endsection