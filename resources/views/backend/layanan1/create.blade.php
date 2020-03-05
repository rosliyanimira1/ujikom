@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('layanan1.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Nama layanan1</label>
                                            <input name="Nama_layanan1" type="text" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Harga layanan1</label>
                                            <input name="Harga_layanan1" type="text" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">  
                                            <label>Gambar</label>
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