@extends('layouts.admin.masteradmin')
@section('dashboard')
<div class="content">

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                    <a href="{{ route('masterkomponen') }}" class="badge badge-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('store.komponen') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file">
                        <label for="image" @error('image')
                        class='text-danger'
                    @enderror>Masukkan gambar @error('image')
                    | {{ $message }}
                @enderror</label>
                        <input type="file" class="form-control-file" id="image" name="image" onchange="loadPreview(this);" name="image"><br>
                    </div>
                    <img id="preview_img" src={{('assets/image/iconperson.png')}} class="hidden" width="70" height="80"/>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-success btn-default">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-default">Batal</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <script>
        function loadPreview(input, id)
        {
            id = id || '#preview_img';
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();

                reader.onload = function (e)
                {
                    $(id) 
                        .attr('src', e.target.result)
                        .width(70)
                        .height(75);
                };

                reader.readAsDataURL(input.files[0]);
                 $('#preview_img').removeClass('hidden');
                 $('#start').hide();
            }
        }
    
    </script>


</div>
@endsection