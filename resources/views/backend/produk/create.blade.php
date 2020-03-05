@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                <br>
                                    <div class="from-group-inner">  
                                            <label>Gambar</label>
                                            <input class="form-control mobile-phone-number" type="file" name="Gambar" required>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Nama Produk</label>
                                            <input name="Nama_produk" type="text" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Deskripsi</label>
                                            <!-- <input name="Deskripsi" type="text" class="form-control" required/> -->
                                            <textarea name="Deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <br>  
                                    <div class="form-group-inner">
                                        <label>Kategori Produk</label>
                                            <select class="form-control" name="Nama_kategori" required>
                                                <option value=""></option>
                                                @foreach($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->Nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="button-demo">
                                <button type="submit" class="btn btn-success btn-lg" onclick="return confirm('Are you sure you want to save?')">
                                Simpan Data
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection