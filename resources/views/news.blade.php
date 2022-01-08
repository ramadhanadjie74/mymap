@extends("layouts/app")
@push("style")
<link rel="stylesheet" href="{{asset('/styles/news/news.css')}}">
@endpush
@section("content")

<div class="news container-fluid">
    <h6><b>Cari Berita</b></h6>
    <div class="input-group search-field">
        <input type="text" class="form-control" aria-label="Search">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
    </div>

    <div class="berita-item-box1">
    <h6><b>Berita Terbaru</b></h6>
        <ul class="ms-auto d-flex justify-content-around">
            <li>
                <div class="card" style="width: 12rem;">
                    <img src="{{asset('/images/img1.png')}}" alt="banjir bandang">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h5 class="card-title">New 1</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class="card" style="width: 12rem;">
                    <img src="{{asset('/images/img2.png')}}" alt="anak banjiran">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h5 class="card-title">New 2</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class="card" style="width: 12rem;">
                    <img src="{{asset('/images/img3.png')}}" alt="gojek menerjang">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h5 class="card-title">New 3</h5>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="berita-item-box2">
    <h6><b>Berita Seputar Banjir</b></h6>
        <ul class="ms-auto d-flex justify-content-around">
            <li>
                <div class="card" style="width: 12rem;">
                    <img src="{{asset('/images/img4.png')}}" alt="banjir bandang">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h5 class="card-title">Selengkapnya</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class="card" style="width: 12rem;">
                    <img src="{{asset('/images/img4.png')}}" alt="anak banjiran">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h5 class="card-title">Selengkapnya</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class="card" style="width: 12rem;">
                    <img src="{{asset('/images/img6.png')}}" alt="gojek menerjang">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h5 class="card-title">Selengkapnya</h5>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <button type="button" class="btn btn-secondary">Selengkapnya</button>
</div>
@endsection