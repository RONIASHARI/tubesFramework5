<!-- Modal -->
@foreach ($listbarang as $produk)

<div class="modal fade" id="edit_{{$produk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Barang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/barangg/{{$produk->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put');
            <div class="row g-3">
              <div class="col-md-6">
                <label for="NamaProduk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error('NamaProduk') is-invalid @enderror" id="NamaProduk" name="namaproduk" value="{{ $produk->namaproduk }}" placeholder="Masukkan Nama Produk">
                @error('NamaProduk')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="DeskripsiProduk" class="form-label">Deskripsi Produk</label>
                <input type="text" class="form-control @error('DeskripsiProduk') is-invalid @enderror" id="DeskripsiProduk" name="deskripsiproduk" value="{{ $produk->deskripsiproduk }}" placeholder="Masukkan Deskripsi Produk">
                @error('DeskripsiProduk')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                  <option value="">Select Status</option>
                  <option value="Available" {{ $produk->status == 'Available' ? 'selected' : '' }}>Available</option>
                  <option value="Unavailable" {{ $produk->status == 'Unavailable' ? 'selected' : '' }}>Unavailable</option>
                </select>
                @error('status')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              {{-- <div class="col-md-6">
                <label for="foto_produk" class="form-label">Foto Produk</label>
                <input type="file" class="form-control @error('fotoproduk') is-invalid @enderror" id="foto_produk" name="fotoproduk">
                @error('fotoproduk')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
