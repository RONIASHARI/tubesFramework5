@extends('layout.layout')
@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('barangg.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Create Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="NamaBarang" class="form-label">Nama Barang</label>
                        <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text" name="NamaBarang" id="NamaBarang" value="{{ old('NamaBarang') }}" placeholder="Enter Nama Barang">
                        @error('NamaBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="KodeBarang" class="form-label">Kode Barang</label>
                        <input class="form-control @error('KodeBarang') is-invalid @enderror" type="text" name="KodeBarang" id="KodeBarang" value="{{ old('KodeBarang') }}" placeholder="Enter Kode Barang">
                        @error('KodeBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="JumlahBarang" class="form-label">Jumlah Barang</label>
                        <input class="form-control @error('JumlahBarang') is-invalid @enderror" type="text" name="JumlahBarang" id="JumlahBarang" value="{{ old('JumlahBarang') }}" placeholder="Enter Jumlah Barang">
                        @error('JumlahBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="DeskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="text" name="DeskripsiBarang" id="DeskripsiBarang" value="{{ old('DeskripsiBarang') }}" placeholder="Enter Deskripsi Barang">
                        @error('DeskripsiBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('barangg.index') }}" class="btn
btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i>
                            Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection