@extends('user.app')
@section('content')
<div class="site-blocks-cover" style="background-image: url({{ asset('shopper') }}/images/sapii.jpeg);" data-aos="fade" style="height:200px>
    <div class="container">
    <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
        <h1 class="mb-2">Amanah Ummah Melayani Aqiqah & Qurban  </h1>
        <div class="intro-text text-center text-md-left">
            <p class="mb-2">Melaksanakan Aqiqah adalah bentuk rasa syukur kepada ALLAH SWT atas kelahiran seorang bayi dikeluarga muslim.
YAYASAN AMANAH UMMAH ISLAMIYYAH kami melayani penyediaan dan pemotongan hewan domba untuk acara Aqiqah dan juga domba beserta sapi untuk hewan qurban.
Domba akan diantar dalam keadaan hidup ataupun dipotong dan dibersihkan tanpa biaya tambahan (untuk yang dipotong dibersihkan kulit menjadi infaq bagi yayasan) </p>
            <p>
            <a href="{{ route('user.produk') }}" class="btn btn-sm btn-warning">Belanja Sekarang</a>
            </p>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
        <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Pengiriman</h2>
            <p>Gratis pengiriman untuk wilayah Kota Bandung.</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon mr-4 align-self-start">
            <span class="icon-star"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Kualitas Hewan</h2>
            <p>Kualitas Hewan Aqiqah & Qurban terjamin karena semuanya dipelihara dengan baik.</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon mr-4 align-self-start">
            <span class="icon-security"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Keamanan</h2>
            <p>Kami menjamin keamanan dalam pengiriman barang sampai diterima oleh anda wilayah Kota Bandung.</p>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="site-section block-3 site-blocks-2 bg-light"  data-aos="fade-up">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Produk Tersedia</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel" >
            @foreach($produks as $produk)
            <div class="item">
            <div class="block-4 text-center">
                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                <figure class="block-4-image">
                <img src="{{url('/')}}/{{  $produk->image }}" alt="Image placeholder" class="img-fluid" width="100%" style="height:300px">
                </figure>
                </a>
                <div class="block-4-text p-4">
                <h3><a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">{{ $produk->name }}</a></h3>
                <p class="mb-0">Rp.{{ number_format($produk->price,0) }}</p>
                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}" class="btn btn-primary mt-2">Detail</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    </div>
</div>
    @endsection