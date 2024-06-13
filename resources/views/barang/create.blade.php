@extends('layout.layout')
@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('barangg.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @vite('resources/sass/app.scss')
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-pencil-square"></i>
                    <h4>Input Barang</h4>
                </div>
                <hr>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="NamaProduk" class="form-label">Nama Produk</label>
                        <input class="form-control @error('NamaProduk') is-invalid @enderror" type="text" name="namaproduk" id="NamaProduk" value="{{ old('NamaProduk') }}" placeholder="Masukkan Nama Produk">
                        @error('namaproduk')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>

                        {{-- <div class="col-md-6 mb-3">
                    <label for="JumlahBarang" class="form-label">Jumlah Barang</label>
                    <input class="form-control @error('JumlahBarang') is-invalid @enderror" type="text" name="JumlahBarang" id="JumlahBarang" value="{{ old('JumlahBarang') }}" placeholder="Masukkan Jumlah Barang">
                        @error('JumlahBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div> --}}
                    <div class="col-md-6 mb-3">
                        <label for="DeskripsiProduk" class="form-label">Deskripsi Produk</label>
                        <input class="form-control @error('DeskripsiProduk') is-invalid @enderror" type="text" name="deskripsiproduk" id="DeskripsiProduk" value="{{ old('DeskripsiProduk') }}" placeholder="Masukkan Deskripsi Produk">
                        @error('deskripsiproduk')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                            <option value="">Select Status</option>
                            <option value="Available" {{ old('status') == 'Available' ? 'selected' : '' }}>Available
                            </option>
                            <option value="Unavailable" {{ old('status') == 'Unavailable' ? 'selected' : '' }}>
                                Unavailable</option>
                        </select>
                        @error('status')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="foto_produk" class="form-label">Foto Produk</label>
                        <input type="file" class="form-control @error('fotoproduk') is-invalid @enderror" id="foto_produk" name="fotoproduk">
                        @error('fotoproduk')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <!-- Other fields -->
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 d-grid">
                    <a href="{{ route('barangg.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                        <i class="bi-arrow-left-circle me-2"></i> Cancel
                    </a>
                </div>
                <div class="col-md-6 d-grid">
                    <button type="submit" class="btn btn-dark btn-lg mt-3">
                        <i class="bi-check-circle me-2"></i> Save
                    </button>
                </div>
            </div>
    </form>

</div>
</div>
</div>
</form>
</div>
@vite('resources/js/app.js')
@endsection