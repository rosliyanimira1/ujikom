@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <br>
                            <div class="from-group-inner">
                                <center>
                                    <img src="{{ asset('assets/img/layanan1/'.$layanan1->Gambar) }}" alt="" height="150px" width="200px">
                                </center>
                            </div>
                            <br>   
                            <div class="from-group-inner">
                                    <label>Nama layanan1</label>
                                    <input readonly name="nama_layanan1" type="text" class="form-control" required  value="{{$layanan1->nama_layanan1}}"/>
                            </div>
                            <br>
                            <div class="from-group-inner">
                                    <label>Harga layanan1</label>
                                    <input readonly name="Harga_layanan1" type="text" class="form-control" required  value="{{$layanan1->harga_layanan1}}"/>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                    <form action="/admin/layanan1">
                        <div class="button-demo">
                            <button type="submit" class="btn btn-danger  btn-lg waves-effect" onclick="return confirm('Are you sure you want to go back?')">
                            Kembali
                            </button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection