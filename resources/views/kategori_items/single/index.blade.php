@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group mb-2">
                    <a href="{{ url('kategori-items') }}" class="btn btn-secondary">Kembali ke Daftar Item</a>
                </div>
                <div class="card">
                    <div class="card-header">Kategori Item</div>

                    <div class="card-body">
                        <table>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                        </table>
                        <a class="btn btn-info" href="{{ url('kategori-items/form/edit') }}/{{ $data->id }}">Edit</a>
                        <a class="btn btn-danger" href="{{ url('kategori-items/delete') }}/{{ $data->id }}"
                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>

                        <hr>
                        <h5>Master Items in this Kategori:</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Harga Beli</th>
                                    <th>Laba</th>
                                    <th>Supplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($masterItems as $item)
                                    <tr>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->harga_beli }}</td>
                                        <td>{{ $item->laba }}</td>
                                        <td>{{ $item->supplier }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Master Items in this category</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
