@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('jambuka.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Hari</label>
                                            <input name="Hari" type="text" class="form-control" required/>
                                    </div>
                                    <br> 
                                    <div class="from-group-inner">
                                            <label>Jam Buka</label>
                                            <input name="Jam_buka" type="time" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Jam Tutup</label>
                                            <input name="Jam_tutup" type="time" class="form-control" required/>
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