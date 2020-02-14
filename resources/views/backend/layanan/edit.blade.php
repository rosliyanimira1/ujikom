@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('layanan.update', $layanan->id) }}" method="post" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Hama layanan</label>
                                            <input name="Nama_layanan" type="text" class="form-control" required  value="{{$layanan->nama_layanan}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Harga layanan</label>
                                            <input name="Harga_layanan" type="text" class="form-control" required  value="{{$layanan->harga_layanan}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">  
                                        <img src="{{ asset('assets/img/layanan/'.$layanan->Gambar) }}" alt="" height="100px" width="150px">
                                        <input class="form-control mobile-phone-number" type="file" name="Gambar" required>
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