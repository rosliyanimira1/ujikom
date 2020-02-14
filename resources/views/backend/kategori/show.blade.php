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
                                    <label>Nama kategori</label>
                                    <input readonly name="Nama_kategori" type="text" class="form-control" required  value="{{$kategori->Nama_kategori}}"/>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                    <form action="/admin/kategori">
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