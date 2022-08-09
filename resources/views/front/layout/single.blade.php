@extends('front.home')
@section('content')
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
{{--         <div id="fh5co-title-box" style="background-image: url(images/camila-cordeiro-114636.jpg); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="page-title">
                <img src="images/person_1.jpg" alt="Free HTML5 by FreeHTMl5.co">
                <span>January 1, 2018</span>
                <h2>How to write interesting articles</h2>
            </div>
        </div> --}}
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div class="fh5co_suceefh5co_height_2"><img src="https://picsum.photos/640/480" alt="img"/>
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                        <div class="">
                            <a href="#" class="color_fff">
                                <i class="fa fa-clock-o"></i>
                                &nbsp;&nbsp;
                                @php
                                use Carbon\Carbon;
                                echo Carbon::now()->toFormattedDateString();
                                @endphp
                            </a>
                        </div>
                        <div class=""><a href="single.html" class="fh5co_good_font_2"> After all is said and done, more is said than done </a></div>
                    </div>
                </div>
                <h1>Big title loren</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada enim id enim congue
                    convallis. Praesent a cursus orci. Proin mauris eros, rhoncus in risus nec, vestibulum dignissim
                    diam. Duis dapibus, magna ac fringilla consectetur, tellus quam aliquam quam, molestie tincidunt
                    justo risus et nunc. Donec quis justo nec diam hendrerit facilisis placerat non magna. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
                <p>
                    Nulla tincidunt sit amet ligula interdum pulvinar. Sed nec volutpat enim. Praesent pretium
                    ullamcorper
                    quam, at rhoncus magna consectetur quis. Nulla condimentum, libero vel varius sodales, lacus urna
                    accumsan purus, at
                    mattis nisi nibh in lorem. Sed laoreet, ante vitae tincidunt auctor, sapien metus tincidunt ante,
                    quis aliquam lacus risus id quam.
                </p>
                <h3>Title Lorem Ipsum</h3>
                <p>
                    Nam vehicula viverra quam, nec ornare ex convallis eget. Praesent pulvinar, justo at lacinia
                    elementum, dolor elit facilisis massa, vel feugiat elit massa et libero. Praesent hendrerit metus eu
                    elementum commodo. Morbi tempus mi a nulla scelerisque, vitae vulputate nisi commodo. Maecenas felis
                    urna, dictum quis mollis quis, mollis vel ligula. Nullam sodales sapien tellus, ornare tincidunt
                    dolor imperdiet at. Vestibulum convallis, felis quis condimentum finibus, justo lectus aliquam
                    libero, eu lacinia tellus leo eu orci.
                </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, modi!</li>
                    <li>Ea iure at, debitis culpa perspiciatis suscipit laudantium a, expedita.</li>
                    <li>Voluptate distinctio perspiciatis cum sed ipsum nisi accusantium a aut!</li>
                    <li>Sed vel quo dignissimos, quaerat totam officia, deserunt provident minus.</li>
                </ul>
                <p>
                    Maecenas consequat dictum aliquam. Praesent nec magna at ipsum facilisis dictum sit amet nec arcu.
                    Donec ac metus a elit rhoncus euismod et sit amet velit. Nunc quis lacus vel metus tincidunt
                    vulputate in et libero. Aliquam dolor lacus, facilisis ultrices rutrum in, blandit vitae nulla.
                    Nullam vestibulum, odio vitae aliquam aliquam, nibh dui iaculis augue, ut tristique nisi est in
                    tellus. Fusce volutpat ultricies venenatis. In a arcu in tellus tincidunt accumsan. Nulla pretium at
                    ex viverra vulputate. Cras mollis velit metus, non suscipit felis luctus sit amet. Ut vel leo vitae
                    magna blandit tempor in sit amet arcu. Donec dignissim mattis dui. Donec ultrices malesuada sapien,
                    ut fermentum nisi efficitur eu. Phasellus dui eros, posuere vel lacus vitae, venenatis feugiat
                    libero. Nunc sed nisi feugiat, consequat arcu id, vehicula augue. Donec viverra tincidunt nisi eget
                    ornare.
                </p>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                @include('front.layout.tags')
                @include('front.layout.most-popular')
            </div>
        </div>
    </div>
</div>
@endsection