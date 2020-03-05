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
                                    <label>Hari</label>
                                    <input readonly name="Hari" type="text" class="form-control" required  value="{{$Jamnuka->Hari}}"/>
                            </div>
                            <br>   
                            <div class="from-group-inner">
                                    <label>Jam Buka</label>
                                    <input name="Jam_buka" type="time" class="form-control" value="{{}}" required/>
                            </div>
                            <br>
                            <div class="from-group-inner">
                                    <label>Jam Tutup</label>
                                    <input name="Jam_tutup" type="time" class="form-control" value="{{}}" required/>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                    <form action="/admin/Jamnuka">
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