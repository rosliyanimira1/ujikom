@extends('backend.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <center><a class="btn btn-primary" href="{{ route('produk.create') }}">Tambah Data</a></center>
                    <br>
                    <div class="table-responsive">
                    <table class="table table-hover" id="tab" style="width:100%">
                        <thead>
                            <tr class="bg-info">
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama produk</th>
                                <th>Deskripsi</th>
                                <th>Slug</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($produk as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td><img src="{{ asset('assets/img/produk/'.$data->Gambar) }}" alt="" height="100px" width="150px"></td>
                                <td style="text-align:center"><a href="{{ route('produk.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td style="text-align:center"><a href="{{ route('produk.show', $data->id) }}" class="btn btn-info">Detail Data</a></td>
                                <td style="text-align:center">
                                <td>{{ $data->Nama_produk }}</td>
                                <td>{{ $data->Deskripsi }}</td>
                                <td>{{ $data->Slug }}</td>
                                    <form action="{{ route('produk.destroy', $data->id) }}" method="post">
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