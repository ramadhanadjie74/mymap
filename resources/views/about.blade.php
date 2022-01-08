@extends("layouts/app")
@push("style")
<link rel="stylesheet" href="{{asset('/styles/about-us/about-us.css')}}">
@endpush
@section("content")

<div class="about container-fluid">
    <h4><b>About Us</b></h4>
    <div class="map ms-auto d-flex justify-content-around"> <img src="{{asset('/images/map-book.png')}}" alt="map"> </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A placeat quae nobis illo earum maxime. Quasi animi facere nisi unde ducimus cupiditate explicabo voluptatum, odio rem dolores a quas quisquam molestiae qui id? Quae eum reprehenderit nihil corrupti id minus exercitationem, maiores ducimus quis libero laborum facilis soluta ut sapiente.</p>    
</div> 
@endsection