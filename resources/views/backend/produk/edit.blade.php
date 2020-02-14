@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <br>
                                    <div class="from-group-inner">  
                                        <img src="{{ asset('assets/img/produk/'.$produk->Gambar) }}" alt="" height="100px" width="150px">
                                        <input class="form-control mobile-phone-number" type="file" name="Gambar" required>
                                    </div>
                                    <br> 
                                    <div class="from-group-inner">
                                            <label>Nama produk</label>
                                            <input name="Nama_produk" type="text" class="form-control" required  value="{{$produk->Nama_produk}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Deskripsi</label>
                                            <input name="Dskripsi" type="text" class="form-control" required  value="{{$produk->Deskripsi}}"/>
                                    </div>  
                                    <br>
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