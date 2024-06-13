@extends('layout.layout')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8">
            <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/tv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/sofa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/meja.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="accordion custom-accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            TV
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Sewa TV</strong> berkualitas dari kami untuk pengalaman menonton luar biasa. Tersedia berbagai ukuran dengan resolusi hingga 4K Ultra HD, fitur Smart TV untuk Netflix dan YouTube, serta konektivitas lengkap. Nikmati fleksibilitas durasi sewa, layanan perawatan gratis, pengiriman dan pemasangan cepat, serta kemudahan upgrade. Pilih TV, tentukan durasi sewa, lakukan pembayaran, dan kami akan mengantarkan serta memasang TV di rumah Anda. Hubungi kami sekarang untuk informasi lebih lanjut!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Kursi
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Sewa kursi</strong> berkualitas tinggi dari kami untuk kenyamanan dan gaya di ruang Anda. Tersedia berbagai jenis kursi, mulai dari kursi makan elegan, kursi kerja ergonomis, hingga kursi santai, dengan desain ergonomis, material premium, dan beragam pilihan warna. Nikmati fleksibilitas durasi sewa harian, bulanan, atau tahunan, layanan perawatan dan perbaikan gratis, pengiriman dan penataan cepat, serta kemudahan upgrade. Pilih kursi dari katalog kami, tentukan durasi sewa, lakukan pembayaran, dan kami akan mengantarkan serta menata kursi di tempat Anda.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Meja
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Sewa meja</strong> berkualitas dari kami untuk berbagai kebutuhan Anda, mulai dari meja makan elegan, meja kerja fungsional, hingga meja kopi stylish. Terbuat dari material premium dengan desain modern dan kokoh, meja-meja kami menawarkan tampilan estetik sekaligus daya tahan. Nikmati fleksibilitas durasi sewa harian, bulanan, atau tahunan, lengkap dengan layanan perawatan dan perbaikan gratis, serta pengiriman dan penataan cepat. Pilih meja dari katalog kami, tentukan durasi sewa, lakukan pembayaran, dan kami akan mengantarkan serta menata meja di tempat Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
