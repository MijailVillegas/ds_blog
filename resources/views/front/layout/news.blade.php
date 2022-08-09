@extends('front.home')
@section('content')
<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
    {{-- @include('front.layout.news') --}}
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Noticias</div>
    </div>
    <div class="row pb-4">
        <div class="col-md-5">
            <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="https://picsum.photos/640/480" alt=""/></div>
                <div></div>
            </div>
        </div>
        <div class="col-md-7 animate-box">
            <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
            nostrud quis xercitation ullamco. </a> <a href="single.html" class="fh5co_mini_time py-3"> Thomson Smith -
            April 18,2016 </a>
            <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            </div>
        </div>
    </div>
    <div class="row pb-4">
        <div class="col-md-5">
            <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="https://picsum.photos/640/480" alt=""/></div>
                <div></div>
            </div>
        </div>
        <div class="col-md-7">
            <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
            nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
            April 18,2016 </a>
            <div class="fh5co_consectetur"> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore.
            </div>
            <ul class="fh5co_gaming_topikk pt-3">
                <li> Why 2017 Might Just Be the Worst Year Ever for Gaming</li>
                <li> Ghost Racer Wants to Be the Most Ambitious Car Game</li>
                <li> New Nintendo Wii Console Goes on Sale in Strategy Reboot</li>
                <li> You and Your Kids can Enjoy this News Gaming Console</li>
            </ul>
        </div>
    </div>
    <div class="row pb-4">
        <div class="col-md-5">
            <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img">
                    <img src="https://picsum.photos/640/480" alt=""/>
                </div>
                <div></div>
            </div>
        </div>
        <div class="col-md-7">
            <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
            nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
            April 18,2016 </a>
            <div class="fh5co_consectetur"> Quis nostrud xercitation ullamco laboris nisi aliquip ex ea commodo
                consequat.
            </div>
        </div>
    </div>
    <div class="row pb-4">
        <div class="col-md-5">
            <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="https://picsum.photos/768/512" alt=""/></div>
                <div></div>
            </div>
        </div>
        <div class="col-md-7">
            <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
            nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
            April 18,2016 </a>
            <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    @include('front.layout.tags')
    @include('front.layout.most-popular')
</div>
@endsection