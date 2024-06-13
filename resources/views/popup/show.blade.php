<!-- Button trigger modal -->
@foreach ($listbarang as $produk)
<!-- Modal -->
<div class="modal fade" id="show_{{$produk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-4">
              <strong>Nama Produk:</strong>
            </div>
            <div class="col-8">
              <p>{{ $produk->namaproduk }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <strong>Deskripsi Produk:</strong>
            </div>
            <div class="col-8">
              <p>{{ $produk->deskripsiproduk }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <strong>Status Produk:</strong>
            </div>
            <div class="col-8">
              <p>{{ $produk->status }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <img src="/storage/fotoProduk/{{ $produk->fotoproduk }}" alt="ini harusnya foto {{ $produk->fotoproduk }}" class="img-fluid" style="max-height: 200px; border: 1px solid #ddd; padding: 5px;">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach

