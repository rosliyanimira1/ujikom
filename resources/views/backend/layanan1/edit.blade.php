@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('layanan1.update', $layanan1->id) }}" method="post" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Hama layanan1</label>
                                            <input name="Nama_layanan1" type="text" class="form-control" required  value="{{$layanan1->nama_layanan1}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Harga layanan1</label>
                                            <input name="Harga_layanan1" type="text" class="form-control" required  value="{{$layanan1->harga_layanan1}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">  
                                        <img src="{{ asset('assets/img/layanan1/'.$layanan1->Gambar) }}" alt="" height="100px" width="150px">
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