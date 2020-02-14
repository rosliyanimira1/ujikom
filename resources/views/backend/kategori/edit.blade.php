@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Nama kategori</label>
                                            <input name="Nama_kategori" type="text" class="form-control" required  value="{{$kategori->kategori}}"/>
                                    </div> 
                                </div>
                                <br>
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