@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('galleri.update', $galleri->id) }}" method="post" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">  
                                        <img src="{{ asset('assets/img/galleri/'.$galleri->Gambar) }}" alt="" height="100px" width="150px">
                                        <input class="form-control mobile-phone-number" type="file" name="Gambar" required>
                                    </div>
                                    <br>
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