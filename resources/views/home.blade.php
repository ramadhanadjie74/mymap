@extends("layouts/app")
@push("style")
<link rel="stylesheet" href="{{asset('/styles/home/home.css')}}">
@endpush
@section("content")

<div class="berita container-fluid">
    <h6>Berita Terbaru</h6>
    <div class="berita-item-box">
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
                        <h5 class="card-title">New3</h5>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="peta container-fluid">
    <h6>Peta</h6>
    <div class="map ms-auto d-flex justify-content-around"> <img src="{{asset('/images/map.jpeg')}}" alt="map"> </div>
</div>

<div class="laporan container-fluid">
    <h6>Laporkan</h6>
    <p>Lapor disini jika anda menemukan titik banjir, dengan mengisi data dibawah ini!!!</p>

    <div class="form1">
        <div class="form-box d-flex">
            <div class="form-box-l d-flex flex-column justify-content-between">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Waktu Laporan</label>
                    <input type="datetime-local" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jenis Laporan</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Banjir</option>
                        <option value="2">Tanggul Jebol</option>
                        <option value="3">Peringatan Ketinggian Air</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Lanjutkan">
                </div>

            </div>
            <div class="form-box-r">
                <div class="maps">
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Lapor Kondisi Banjir</label>
                        <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kondisi Banjir"> -->
                        <br>
                        <img src="{{asset('/images/map.jpeg')}}" alt="map">
                    </div>
                    <a href="">
                        <p><u>klik disini untuk memilih lokasi banjir</u></p>
                    </a>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Ketinggian Banjir</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="ketinggian dalam meter" min="1" max="1000">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Upload Bukti Banjir</label>
                    <br>
                    <div class="box-upload">
                        <label for="img">Select image:</label>
                        <input class="form-control" type="file" id="img" name="img" accept="image/*">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Tambahkan Deskripsi</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Deskripsi Tambahan">
                </div>

            </div>
        </div>


        <div class="form-box-radio">
            <h6>Kondisi Saluran Air</h6>
            <p>Pilihlah Bila Kondisi Dibawah Ini Benar!</p>


            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label"><b>Kebersihan Air</b></label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Sedang</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Buruk</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label"><b>Ketinggian Air</b></label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Rendah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Sedang</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Tinggi</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label"><b>Kebersihan Lingkungan Sekitar</b></label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Sedang</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Buruk</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label"><b>Apakah Lokasi Sekitar Pernah Terjadi Banjir?</b></label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Tidak Tahu</label>
                </div>
                <input type="submit" class="btn btn-primary">

            </div>
        </div>

    </div>
</div>
@endsection