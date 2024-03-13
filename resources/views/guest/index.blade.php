@extends('layouts.guest')

@section('content')

{{-- header --}}
<header class="header d-flex align-items-center ">
    <div class="col-6 ">
        <h1 class="text-white mb-5">Discover, collect, and sell extraordinary <br>
            <span class="text-site-gradient">NFTs</span> 
        </h1>

        <p class="text-light mb-5">NFT is the world's first and largest NFT marketplace</p>

        <div class="buttons">
            <a href="" class="btn btn-bg-light text-white px-4 py-2 me-3">Explore</a>
            <a href="" class="btn btn-bg-dark border text-white px-4 py-2">Create</a>
        </div>

    </div>

</header>
<section class="auctions">
    <div class="title d-flex justify-content-between align-items-center">
        <h2 class="text-light">Live Auctions </h2>

            <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">Explore All</a>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-pagination"></div>
</section>

@endsection