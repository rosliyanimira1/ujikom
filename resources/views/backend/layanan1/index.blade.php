@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <center><a class="btn btn-primary" href="{{ route('layanan1.create') }}">Tambah Data</a></center>
                    <br>
                    <div class="table-responsive">
                    <table class="table table-hover" id="tab" style="width:100%">
                        <thead>
                            <tr class="bg-info">
                                <th>No</th>
                                <th>Nama Layanan1</th>
                                <th>Harga Layanan1</th>
                                <th>Gambar</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($layanan1 as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->nama_layanan1 }}</td>
                                <td>{{ $data->harga_layanan1 }}</td>
                                <td><img src="{{ asset('assets/img/layanan1/'.$data->Gambar) }}" alt="" height="100px" width="150px"></td>
                                <td style="text-align:center"><a href="{{ route('layanan1.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td style="text-align:center"><a href="{{ route('layanan1.show', $data->id) }}" class="btn btn-info">Detail Data</a></td>
                                <td style="text-align:center">
                                    <form action="{{ route('layanan1.destroy', $data->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn -sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete?')">Hapus Data</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection