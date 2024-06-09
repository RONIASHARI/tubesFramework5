@extends('layout.layout')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">List Barang</h4>
                @vite('resources/sass/app.scss')
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{route('barangg.create')}}" class="btn btn-primary">Create Produk</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table id="datatable" class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Foto Produk</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listbarang as $produk)
                    <tr>
                        <td>{{ $produk->namaproduk }}</td>
                        <td>{{ $produk->deskripsiproduk }}</td>
                        <td>{{ $produk->status }}</td>
                        <td>
                            <img src="/images/{{ $produk->fotoproduk }}" alt="ini harusnya foto {{ $produk->fotoproduk }}" style="max-height: 100px">
                        </td>
                        <td>
                            <div class="d-flex">
                                @include('popup.show')
                                <a href="#" class="btn btn-outline-dark btn-sm me-2" data-bs-toggle="modal" data-bs-target="#show">
                                    <i class="bi-person-lines-fill"></i>
                                </a>
                                @include('popup.edit')
                                <a href="#" class="btn btn-outline-dark btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit_{{ $produk->id }}">
                                    <i class="bi-pencil-square"></i>
                                </a>
                                <div>
                                    <form action="{{ route('barangg.destroy', $produk->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @vite('resources/js/app.js')
@endsection
